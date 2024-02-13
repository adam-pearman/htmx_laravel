<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ContactCountController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): string
    {
        if (! request()->headers->get('HX-Request')) {
            throw new NotFoundHttpException();
        }

        $count = Contact::count();

        sleep(2);

        return "{$count} total Contacts";
    }
}
