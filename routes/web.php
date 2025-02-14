<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;

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
    return view('welcome',["cart"=>count(cart()->items())]);
})->name('home');
Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');
Route::post('/mail', [\App\Http\Controllers\CartController::class,'MailPrice'])->name('mail');

Route::post('/ajax', [\App\Http\Controllers\DataTablesController::class,'index'])->name('ajax');
Route::post('/cart_ajax', [\App\Http\Controllers\CartController::class,'ajax'])->name('cart_ajax');
Route::get('/parfum/{slug}', [\App\Http\Controllers\CartController::class,'Detail'])->name('detail');
Route::get('/cart', [\App\Http\Controllers\CartController::class,'render'])->name('cart');

Route::group(['middleware' => ['guest']], function() {

Route::get('/register', [AuthController::class,'showRegister'])->name('register');
Route::post('/register_process', [AuthController::class,'register'])->name('register_process');


Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::post('/login_process', [AuthController::class,'login'])->name('login_process');
});



Route::group(['middleware' => ['auth']], function() {
    Route::get('/personal', [\App\Http\Controllers\PersonalController::class,'index'])->name('personal');
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');

});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/import', function () {
        return view('import');
    });
    Route::post('/import_batch', [\App\Http\Controllers\ImportController::class,'batch'])->name('import.batch');
    Route::post('/import', [\App\Http\Controllers\ImportController::class,'import'])->name('product.import');
});

