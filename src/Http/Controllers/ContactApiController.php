<?php

namespace hosomikai\ContactForm\Http\Controllers;

use Illuminate\Http\Request;
use hosomikai\ContactForm\Http\Controllers\Controller;
use hosomikai\ContactForm\Facades\ContactForm;
use hosomikai\ContactForm\Http\Requests\ContactForm as ContactFormRequest;

class ContactApiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormRequest $request)
    {
        $validated = $request->validated();

        ContactForm::send($validated['name'], $validated['email'], $validated['message'], $request->get('phone'));

        return response()->json([
            'message' => 'The message has been sent succesfully'
        ]);
    }
}
