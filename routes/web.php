<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\ApplyController;
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
    return view('index');
});

Route::get('about', function () {
    return view('about');
});


Route::get('advisor', function () {
    return view('advisor');
});


Route::get('blog', function () {
    return view('blog');
});

Route::get('contact', function () {
    return view('contact');
});


Route::get('feature', function () {
    return view('feature');
});


Route::get('review', function () {
    return view('review');
});


Route::get('service', function () {
    return view('service');
});


Route::get('single', function () {
    return view('single');
});

Route::get('apply', function () {
    return view('apply');
});

Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::resource('Apply',ApplyController::class);
