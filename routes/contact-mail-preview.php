<?php

use hosomikai\ContactForm\Mail\ContactForm;

Route::get(config('contact.routes.web.preview'), function () {
    return new ContactForm('kai', 'kai@twjoin.com', 'build wonderful things!');
})->name(config('contact.routes.web.preview') . '.index');
