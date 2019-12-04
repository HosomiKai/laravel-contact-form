<?php

Route::post(config('contact.routes.api.store'), '\hosomikai\ContactForm\Http\Controllers\ContactApiController@store')->name(config('contact.routes.api.store') . '.store');