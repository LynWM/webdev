<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/services', function () {
    return view('services');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/groupspace', function () {
    return view('groupspace');
});

Route::get('/laptopspace', function () {
    return view('laptopspace');
});

Route::get('/restingarea', function () {
    return view('restingarea');
});

Route::get('/studyspace', function () {
    return view('studyspace');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/users', function () {
    return view('users');
});

Route::post('/user', function () {
    return view('users');
});
Route::get('/bookings', function () {
    return view('bookings');
});

Route::post('/bookings', function () {
    return view('bookings');
});



//Route::get('/', [UserController::class, 'HomeIndex']);
Route::post('store', [UserController::class, 'register'])->name('register');









//use App\Http\Controllers\UserController;
//use App\Http\Controllers\VideoController;


