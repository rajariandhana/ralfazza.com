<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('home',[
        'pageTitle'=>'Home'
    ]);
});

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);