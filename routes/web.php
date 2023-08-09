<?php

use Illuminate\Http\Request;
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

Route::patch("/users/{id}/guncelle", [UserController::class, 'update'])->name("user.update");
//Patch => Kullanicinin sadece bir bilaisi guncellenmek istemiyorsa kullanilir. Ornegin yalnizca email.

//Put => Kullanicinin tum bilgilerini guncelliye biliriz.
Route::put("/users/{id}/tumunu-guncelle", [UserController::class, 'updateAll'])->name("user.updateAll");


Route::any("hersey", function(Request $request){
   dd("hersey geldi");
});

Route::resource("article", "ArticleController");
Route::apiResource("/api/article", "Api/ArticleController");


























