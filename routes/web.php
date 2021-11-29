<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SubmissionController;
require 'admin.php';

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
    return view('frontend.pages.home');
})->name('home');
Route::get('/about', function () {
    return view('frontend.pages.home');
})->name('about');
Route::get('/submission-process', function () {
    return view('frontend.pages.process');
})->name('submission-process');
Route::get('/terms-conditions', function () {
    return view('frontend.pages.terms-conditions');
})->name('terms-conditions');
Route::get('/faqs', function () {
    return view('frontend.pages.faqs');
})->name('faqs');


Route::get('/submission-form', [SubmissionController::class, 'index'])->name('submission-form');
Route::post('/submit-logo', [SubmissionController::class, 'store'])->name('submit-logo');

