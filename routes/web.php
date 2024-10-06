<?php

use App\Http\Controllers\LoginController;
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
});

Route::get('/plan', function () {
    return view('PlanVisit', [
        "title" => "Plan Your Visit"
    ]);
});

Route::get('/BookTour', function () {
    return view('BookTour', [
        "title" => "Book a Tour"
    ]);
});


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::resource('plan', PlanController::class);


