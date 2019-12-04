<?php

namespace hosomikai\ContactForm\Facades;

use Illuminate\Support\Facades\Facade;

class ContactForm extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'contact-form';
    }
}
