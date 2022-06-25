<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Hola/Mundo', [
        "name" => config("app.name")
    ]);
})->name("hola-mundo");
