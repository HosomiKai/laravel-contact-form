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

    /**
     * route for php website.
     *
     * @param array $options
     * @return void
     */
    public static function routes(array $options = [])
    {
        require __DIR__ . '/../../routes/contact.php';
    }

    /**
     * route for api request.
     *
     * @return void
     */
    public static function apiRoutes()
    {
        require __DIR__ . '/../../routes/contact-api.php';
    }

    /**
     * route for email preview.
     *
     * @return void
     */
    public static function previewRoutes()
    {
        require __DIR__ . '/../../routes/contact-mail-preview.php';
    }
}
