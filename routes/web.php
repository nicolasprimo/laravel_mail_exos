<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');
Auth::routes();

Route::get('/admin', function() {
    return view('administration');
})->name('admin')->middleware('auth');

Route::get('contact',[ContactController::class,'indexWebsite'])->name('contact');
Route::resource('admin/contact', ContactController::class);
Route::resource('newsletter', NewsletterController::class);