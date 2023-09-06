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




Route::get('/addToCart/{itemId}', [CartController::class, 'addToCart'])->name('addToCart');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'store'])->name('addToCart');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('removeFromCart');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('/aboutus', function () {
    return view('pages.aboutus');
})->name('aboutus');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/profile/edit', 'UserController@edit')->name('profile.edit');
Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');
Route::put('/profile/update', 'UserController@updateProfile')->name('profile.update');


route::get('/collections', [CollectionController::class, 'index'])->name('collections');
Route::get('/addToCart/{itemId}', [CartController::class, 'addToCart'])->name('addToCart');

Route::get('/collections/{id}', [CollectionController::class, 'show'])->name('collections.show');
Route::get('/collections/{id}', [CollectionController::class, 'detailByIndex'])->name('collections.show');


Route::post('/cart/add', [CartController::class, 'store'])->name('addToCart');


