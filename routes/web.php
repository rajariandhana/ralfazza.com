<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\CVController;

Route::get('/', function () {
    return view('home',[
        'pageTitle'=>'Home'
    ]);
});

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/merch', [MerchController::class, 'index']);
Route::get('/cv', [CVController::class, 'index']);
Route::get('/download-cv', function () {
    $filePath = public_path('Asset/CV/CV_RalfazzaRajariandhana.pdf');
    $fileName = 'CV_RalfazzaRajariandhana.pdf';
    return response()->download($filePath, $fileName);
});