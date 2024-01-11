<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\UserController;
use App\Http\Controllers\Firebase\ContactController;

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

// Route::get('/test', function () {
//     return view('guest_website.pages.login');
// });

Route::get('contacts', [ContactController::class, 'index']);
Route::get('add-contact', [ContactController::class, 'create']);
Route::post('add-contact', [ContactController::class, 'store']);
Route::get('edit-contact/{id}', [ContactController::class, 'edit']);
Route::put('update-contact/{id}', [ContactController::class, 'update']);

// Route::get('delete-contact/{id}', [ContactController::class, 'destroy']);
Route::delete('delete-contact/{id}', [ContactController::class, 'destroy']);