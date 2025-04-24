<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\AppealController;
use App\Http\Controllers\FiscalController;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->middleware('auth')->name('main');
Route::get('/label', function () {
    return view('label');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/fiscal',FiscalController::class);
Route::resource('/bill',BillController::class);
Route::resource('/offer',OfferController::class);
Route::resource('/offer',AppealController::class);