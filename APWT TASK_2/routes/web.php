<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PagesController::class, 'index'])->name('home');
Route::get('/service',[PagesController::class, 'service'])->name('service');
Route::get('/teams',[PagesController::class, 'teams'])->name('teams');
Route::get('/aboutus',[PagesController::class, 'aboutus'])->name('aboutus');

// contact routes 
Route::get('/contact',[PagesController::class, 'contact'])->name('contact');
Route::post('/contact',[PagesController::class, 'contactmessage'])->name('contact');

// registration routes ->

Route::get('/registration',[RegistrationController::class, 'registration'])->name('registration');
Route::post('/registration',[RegistrationController::class, 'regsuccessfull'])->name('registration');

// login routes ->
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login',[LoginController::class, 'loginvalidation'])->name('login');

// successfull pages 
Route::get('/regsuccessfull',[RegistrationController::class, 'regwebsuccessfull'])->name('regsuccessfull');

Route::get('/submitted',[PagesController::class, 'contactmessage'])->name('submitted');
