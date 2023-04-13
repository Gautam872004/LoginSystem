<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Middleware\CheckUserSession;
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

Route::post("/check-login",[Logincontroller::class,"checklogin"]);
Route::get("/register",[Logincontroller::class,"regestration"]);
Route::resource('logisystem',Logincontroller::class);


Route::middleware([CheckUserSession::class])->group(function () {
    Route::get("/viewhome",[Logincontroller::class,"home"])->name("home");
    Route::get("/logout",[Logincontroller::class,"logout"])->name("logout");    
});
