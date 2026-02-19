<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => file_get_contents(public_path('ai-positioning.html')));