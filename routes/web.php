<?php

use App\Http\Controllers\CatalogController;
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
    return view('users.home');
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('catalog', [CatalogController::class, 'index']);
Route::get('catalog/create', [CatalogController::class, 'create']);
Route::post('catalog/create', [CatalogController::class, 'create_action']);
Route::get('/catalog/{id}/update', [CatalogController::class, 'update']);
Route::post('/catalog/{id}/update', [CatalogController::class, 'update_action']);
Route::get('/catalog/{id}/delete', [CatalogController::class, 'update']);
