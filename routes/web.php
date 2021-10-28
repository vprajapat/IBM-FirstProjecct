<?php

use Illuminate\Support\Facades\Route;
use App\Models\Registration;
use App\Http\Controllers\RegistrationController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/introduction', function () {
    return view('introduction');
});

// Route::get('/RegistrationForm', function () {
//     return view('RegistrationForm');
// });

Route::get('/registration', [RegistrationController::class,'index'])->name('student.register');
Route::post('/registration', [RegistrationController::class,'store']);
Route::get('/registration/view', [RegistrationController::class,'view'])->name('student.view');