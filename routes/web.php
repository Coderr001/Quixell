<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CartController;


Route::get("/", function(){
    return view("pages.home");
})->name("home");



Route::get("/login", [UserController::class, "login"])->name("login");
Route::post("/login", [UserController::class, "authenticate"]);
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'store']);


Route::get("/collection", [CollectionController::class, "index"])->name("collections");
Route::get("/collection/{id}", [CollectionController::class, "getById"])->name("collections.show");


Route::get("/cart", [CartController::class, "index"])->name("cart");
Route::post("/cart/add/{id}", [CartController::class, "store"])->name("addToCart");
Route::get("/cart/delete/{id}", [CartController::class, "destroy"])->name("removeFromCart");
Route::get("/cart/check-out", [CartController::class, "checkOut"])->name("checkout");
Route::get("/about", function(){
    return view("pages.aboutus");
})->name("aboutus");

Route::get("/profile", [UserController::class, "editProfile"])->name("profile");

// Route::get("/edit-profile", [UserController::class, "editProfile"])->name("profile.edit");

Route::get("/logout", [UserController::class, "logout"])->name("logout");
Route::post("/profile/update", [UserController::class, "updateProfile"])->name("profile.update");