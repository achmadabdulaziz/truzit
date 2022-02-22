<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class,'index']);

Route::get('/sidebar', function(){
    return view('sidebar');
});

Route::get('/menubar', function(){
    return view('menubar');
});
Route::get('/privacy', function(){
    return view('privacy');
});
Route::get('/landing', function(){
    return view('landing');
});
Route::get('/about', function(){
    return view('about');
});