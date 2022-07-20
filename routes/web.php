<?php

use App\Http\Controllers\NameController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/names', [NameController::class, 'clients']);
Route::get('/names/create', [NameController::class, 'create']);
Route::post('/names/store', [NameController::class, 'store']);
Route::get('/names/show/{name}', [NameController::class, 'show']);
Route::get('/names/edit/{name}', [NameController::class, 'edit']);
Route::post('/names/update/{name}', [NameController::class, 'update']);
Route::post('/names/delete/{name}', [NameController::class, 'destroy']);


Route::get('/photo/create', [NameController::class, 'create']);
Route::post('/photo', [NameController::class, 'img']);