<?php

use App\Http\Controllers\ArticelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('statusLogin')->group(function() {
});

Route::get('/', [UserController::class, 'home']);
// Route::post('/login', [UserController::class, 'auth']);
Route::get('/dshbd', [ArticelController::class, 'show']);

Route::post('/auth', [UserController::class,'auth']);
Route::get('/home', [UserController::class, 'home']);
Route::get('/halaman', [UserController::class, 'hal']);
Route::get('/halaman2', [UserController::class, 'hal2']);
Route::get('/halaman3', [UserController::class, 'hal3']);
Route::get('/halaman4', [UserController::class, 'hal4']);
Route::get('/halaman5', [UserController::class, 'hal5']);
Route::get('/halaman6', [UserController::class, 'hal6']);
Route::get('/halaman7', [UserController::class, 'hal7']);
Route::get('/halaman8', [UserController::class, 'hal8']);
Route::get('/hiu', [UserController::class, 'hiuu']);
Route::get('/login', [UserController::class, 'log']);
// Route::get('/dshbd', [UserController::class, 'dsb']);
Route::get('/kategori', [UserController::class, 'categori']);
Route::get('/detailmoluska', [UserController::class, 'detail']);
Route::get('/invertebrata', [UserController::class, 'detail1']);
Route::get('/vertebrata', [UserController::class, 'detail2']);
Route::get('/about', [UserController::class, 'tentang']);
Route::get('/setting', [UserController::class, 'pengaturan']);
Route::get('/review', [UserController::class, 'review']);

Route::post('/artikel/search',[ArticelController::class,'search']);
Route::get('/artikelcreate', [ArticelController::class, 'create']);
Route::post('/artikelcreate',[ArticelController::class,'add']);
Route::get('/artikel/edit/{id}', [ArticelController::class, 'edit']);
Route::post('/artikel/edit/{id}',[ArticelController::class,'update']);
Route::get('/artikel/delete/{id}',[ArticelController::class,'delete']);

Route::get('/review', [ArticelController::class, 'createw']);
Route::post('/review',[ArticelController::class,'ad']);


