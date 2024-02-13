<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactBulkDeleteRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactBulkDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ContactBulkDeleteRequest $request)
    {
        $validated = $request->validated();

        Contact::whereIn('id', $validated['contact_ids'])
            ->delete();

        return redirect()->route('contacts.index', status: 303);
    }
}
