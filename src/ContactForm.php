<?php

namespace hosomikai\ContactForm;

use hosomikai\ContactForm\Mail\ContactForm as ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactForm
{
    /**
     * 送出聯絡表單.
     *
     * @param string $phone
     *
     * @return void
     */
    public function send(string $name, string $email, string $content, string $phone = null)
    {
        Mail::to(config('contact.email'))
            ->send(new ContactFormMail($name, $email, $content, $phone));
    }
}
