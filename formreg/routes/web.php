<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\OrgRegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EduBackgroundController;
use App\Http\Controllers\WorkExperienceController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/orgregister', [App\Http\Controllers\OrgRegisterController::class, 'orgregister'])->name('orgregister');

Route::post('/register_organisation', [App\Http\Controllers\OrgRegisterController::class, 'register_organisation']);

Route::get('innosubmit', [App\Http\Controllers\HomeController::class, 'innosubmit']);

Route::get('userdetails', [App\Http\Controllers\UserDetailsController::class, 'userdetails']);

Route::post('/edubackground', [App\Http\Controllers\EduBackgroundController::class, 'edubackground']);

Route::post('/workexperience', [App\Http\Controllers\WorkExperienceController::class, 'workexperience']);

// Route::get('submission_success', [App\Http\Controllers\HomeController::class, 'submission_success']);

Route::view('/submission_success','submission_success')->name('submission_success');



