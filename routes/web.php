<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
})->name('home');

Route::get('/BookTour', function () {
    return view('BookTour', [
        "title" => "Book a Tour"
    ]);
});

Route::get('/sign-up', function () {
    return view('auth/sign-up', [
        "title" => "Sign Up"
    ]);
});

Route::get('/ticket', function () {
    return view('ticket', [
        "title" => "Get Ticket"
    ]);
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('showlogin');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('/plan', [PlanController::class, 'index'])->name('plan');

Route::middleware('auth')->group(function () {
   
});


