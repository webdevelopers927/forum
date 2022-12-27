<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
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

Route::get("/", [QuestionController::class, "index"]);
Route::get("/tag/{tag:name}", [TagController::class, "show"]);
Route::get("/category/{category:slug}", [CategoryController::class, "show"]);
Route::get("/question/{question:slug}", [QuestionController::class, "show"]);
Route::get("/register", LoginController::class);
Route::post("/register", [LoginController::class, "store"]);
Route::post("/logout", [LoginController::class, "destroy"]);
Route::get("/login", [LoginController::class, "login"]);
Route::post("/login", [LoginController::class, "create"]);
Route::post("/question/{question:id}/comment", [QuestionController::class, "store"]);
Route::get("/create-question", [QuestionController::class, "create"]);
Route::post("/create-question/create", [QuestionController::class, "storeQuestion"]);

Route::get("/post", function() {
	return view("single");
});
Route::get("/sign", function() {
	return view("register");
});
