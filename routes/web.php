<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFMakerController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/page/{pageNo}', [PDFMakerController::class, 'page']);
Route::get('/print/{pageNo}', [PDFMakerController::class, 'print']);

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');   
    Artisan::call('optimize:clear');   
    
    return "Cleared!";
});