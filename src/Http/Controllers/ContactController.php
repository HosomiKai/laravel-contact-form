<?php

namespace hosomikai\ContactForm\Http\Controllers;

use Illuminate\Http\Request;
use hosomikai\ContactForm\Http\Controllers\Controller;
use hosomikai\ContactForm\Facades\ContactForm;
use hosomikai\ContactForm\Http\Requests\ContactForm as ContactFormRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact-form::index');
    }

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

        return view('contact-form::index')
          ->with('message', 'The message has been sent succesfully');
    }
}
