<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontrolerStart;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/* Route::get('/', [KontrolerStart::class,'start'])->name('start');
Route::get('/kontakt', [KontrolerStart::class,'kontakt'])->name('kontakt');
Route::get('/onas', [KontrolerStart::class,'onas'])->name('onas'); */

Route::controller(KontrolerStart::class)->group(function(){
    Route::get('/', 'start')->name('start');
    Route::get('/kontakt', 'kontakt')->name('kontakt');
    Route::get('/onas', 'onas')->name('onas');
    //Route::get('/onas/{id}/info/{onas}', 'test')->name('test');
});

Route::resource('posty',PostController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
