<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
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

Route::get('/',[ProductController::class,'product']);
Route::get('/product/insert',[ProductController::class,'insert']);
Route::post('/product/insert_action',[ProductController::class, 'insert_action']);
Route::get('/type',[ProductTypeController::class,'type']);
Route::get('/type/insert',[ProductTypeController::class,'insert']);
Route::post('/type/insert_action',[ProductTypeController::class,'insert_action']);
Route::get('product/edit{id}',[ProductController::class,'edit']);
Route::post('/product/edit_action',[ProductController::class,'edit_action']);
Route::get('product/delete{id}',[ProductController::class,'delete']);

