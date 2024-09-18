<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return [
        'name'    => config('app.name'),
        'version' => '1.0.0',
        'author'  => 'Admin',
        'email'   => 'admin@openmis.top',
        'website' => 'www.deam.com.kh',
    ];
});
