<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send an email with the submitted data
        Mail::to('your_email@example.com')->send(new ContactFormMail($validatedData));

        // Return a JSON response
        return response()->json(['message' => 'Thank you for contacting us!']);

    }
}
