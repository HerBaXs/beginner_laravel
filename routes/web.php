<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupportFormController;
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
//Route::get("/anasayfa2", "HomeController@index"); //Eskiden boyle kullaniyorlarmiw

Route::get('/', [HomeController::class, 'index'])->name("Home");

Route::get('about', [HomeController::class, 'about'])->name('about');

//Route::post('contact', [HomeController::class, 'contact'])->name('contact');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::get("/user/{id}/{name?}", [HomeController::class, 'user'])
    ->name("user")
    ->where(["id" => "[0-9]+", "name" => "[a-z]+"]);

Route::get('/support_form', [SupportFormController::class, 'support_form'])->name('support_form');

Route::patch("/users", [UserController::class, 'update'])->name("user.update");
//Patch => Kullanicinin sadece bir bilaisi guncellenmek istemiyorsa kullanilir. Ornegin yalnizca email.

//Put => Kullanicinin tum bilgilerini guncelliye biliriz.
Route::put("/users/{id}/tumunuguncelle", [UserController::class, 'updateAll'])->name("user.updateAll");


