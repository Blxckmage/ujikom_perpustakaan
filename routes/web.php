<?php

use Illuminate\Support\Facades\Route;

// Login Pages
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;


// Admin Pages
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ApprovalController;

// Main Pages
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminBookController;

// User
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminEmployeeController;
use App\Http\Controllers\AdminPublisherController;

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


// General

// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('/account/{name}', [UserController::class, 'index']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/borrowing', [PeminjamanController::class, 'index']);
Route::post('/borrowing/search', [PeminjamanController::class, 'search']);
Route::get('/borrowing/borrow/{id}', [PeminjamanController::class, 'borrow']);
Route::post('/borrowing/borrow', [PeminjamanController::class, 'store']);


// Employee

Route::get('/approval', [ApprovalController::class, 'index'])->name('approval.index');
Route::post('/approval/approve/{id}', [ApprovalController::class, 'approve']);
Route::post('/approval/reject/{id}', [ApprovalController::class, 'reject']);

Route::get('/tambah-kategori', [AdminCategoryController::class, 'index']);
Route::post('/tambah-kategori', [AdminCategoryController::class, 'store']);
Route::delete('/tambah-kategori/{category}', [AdminCategoryController::class, 'destroy']);

Route::get('/tambah-penerbit', [AdminPublisherController::class, 'index']);
Route::post('/tambah-penerbit', [AdminPublisherController::class, 'store']);
Route::delete('/tambah-penerbit/{publisher}', [AdminPublisherController::class, 'destroy']);

Route::get('/tambah-buku', [AdminBookController::class, 'index']);
Route::post('/tambah-buku', [AdminBookController::class, 'store']);
Route::delete('/tambah-buku/{book}', [AdminBookController::class, 'destroy']);


// Admin

Route::get('/tambah-petugas', [AdminEmployeeController::class, 'index']);
Route::post('/tambah-petugas/update/{id}', [AdminEmployeeController::class, 'update']);
Route::post('/tambah-petugas', [AdminEmployeeController::class, 'search']);


// Login

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout']);
