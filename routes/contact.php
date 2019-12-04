<?php

if ($options['index'] ?? true) {
    Route::get(config('contact.routes.web.index'), '\hosomikai\ContactForm\Http\Controllers\ContactController@index')->name(config('contact.routes.web.index') . '.index');
}

Route::post(config('contact.routes.web.store'), '\hosomikai\ContactForm\Http\Controllers\ContactController@store')->name(config('contact.routes.web.store') . '.store');