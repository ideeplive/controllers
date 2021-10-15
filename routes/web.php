<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ShowAbout;

Route::get('/', function () { return view('welcome'); });
// Route::get('about',[AboutController::class, 'show']);
Route::get('about/{name}',[AboutController::class, 'show']);
Route::get('profile',[AdminProfileController::class, 'show_profile']);
Route::get('about', ShowAbout::class);








