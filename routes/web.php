<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('home',[
        'pageTitle'=>'Home'
    ]);
});

Route::get('/projects', [ProjectController::class, 'index']);
