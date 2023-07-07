<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryFormController;

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

Route::get('/', [EnquiryFormController::class, 'index'])->name('enquiry_form');
Route::post('/enquiry', [EnquiryFormController::class, 'submitForm'])->name('enquiry.submit');
Route::get('/enquiry/success', function () {
    return view('enquiry_success');
})->name('enquiry.success');
Route::get('reload-captcha', [EnquiryFormController::class, 'reloadCaptcha']);

