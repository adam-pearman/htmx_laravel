<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUpsertRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $search = request()->query('search', '');
        $contacts = Contact::where(fn ($query) => $query
            ->where('first_name', 'like', "%{$search}%")
            ->orWhere('last_name', 'like', "%{$search}%")
            ->orWhere('email', 'like', "%{$search}%")
            ->orWhere('phone', 'like', "%{$search}%")
        )->paginate();

        $view = 'contacts';
        if (request()->has('search') && request()->headers->get('HX-Trigger') === 'search') {
            $view = 'components.rows';
        }

        return view($view, [
            'contacts' => $contacts,
            'search' => $search,
            'page' => request()->query('page', 1),
        ]);
    }

    public function show(Contact $contact): View
    {
        return view('contact', ['contact' => $contact]);
    }

    public function create(): View
    {
        return view('new-contact');
    }

    public function store(ContactUpsertRequest $request): RedirectResponse
    {
        Contact::create($request->validated());

        return redirect()->route('contacts.index');
    }

    public function edit(Contact $contact): View
    {
        return view('edit-contact', ['contact' => $contact]);
    }

    public function update(ContactUpsertRequest $request, Contact $contact): RedirectResponse
    {
        $contact->update($request->validated());

        return redirect()->route('contacts.index');
    }

    public function destroy(Contact $contact): ?RedirectResponse
    {
        $contact->delete();

        if (request()->headers->get('HX-Current-Url') === route('contacts.show', $contact)) {
            return redirect()->route('contacts.index', status: Response::HTTP_SEE_OTHER);
        }

        return null;
    }
}
