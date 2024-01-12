<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Firebase\InventoryController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

// Login
Route::get('/login', function () {
    return view('auth.login');
  })->name('login');
  
  Route::post('/login', [AuthController::class, 'login'])->name('post.login');
  
  // Register
  Route::get('/register', function () {
    return view('auth.register');
  })->name('register');
  
  Route::post('/register', [AuthController::class, 'register'])->name('post.register');
  
  Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
  });

Route::get('inventory', [InventoryController::class, 'index']);
Route::get('add-inventory', [InventoryController::class, 'create']);
Route::post('add-inventory', [InventoryController::class, 'store']);
Route::get('edit-inventory/{id}', [InventoryController::class, 'edit']);
Route::put('update-inventory/{id}', [InventoryController::class, 'update']);

// Route::get('delete-contact/{id}', [InventoryController::class, 'destroy']);
Route::delete('delete-inventory/{id}', [InventoryController::class, 'destroy']);