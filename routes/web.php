<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\DaftarmobilController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyOrderController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\Register;
use App\Http\Controllers\VendorController;
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

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/', [MainController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [Dashboard::class, 'index'])->middleware('auth', 'admin');

Route::get('/register', [Register::class, 'index'])->middleware('guest');
Route::post('/register', [Register::class, 'store']);

Route::resource('mobil', DaftarmobilController::class)->middleware('auth');

Route::resource('user', PenggunaController::class)->middleware('auth', 'admin');

Route::resource('order', MyOrderController::class)->middleware('auth');

Route::get('/order/{order}', [MyOrderController::class, 'show'])->middleware('auth');


Route::get('/mobil/{mobil}', [DaftarmobilController::class, 'edit'])->name('mobil.edit');
Route::patch('/mobil/{mobil}', [DaftarmobilController::class, 'update'])->name('mobil.update');
Route::delete('/mobil', [DaftarmobilController::class, 'destroy']);

Route::resource('vendor', VendorController::class)->middleware('auth');
Route::patch('vendor/{vendor}', [VendorController::class, 'update'])->name('vendor.update')->middleware('auth');

Route::resource('bank', BankController::class)->middleware('auth');
Route::patch('bank/{bank}', [BankController::class, 'update'])->name('bank.update')->middleware('auth');
