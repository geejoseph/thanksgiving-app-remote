<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThanksgivingListController;

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

Route::get('/', [ThanksgivingListController::class, 'index']);

Route::post('/saveItemRoute', [ThanksgivingListController::class, 'saveItem'])->name('saveItem');
Route::get('/deleteItemRoute/{id}', [ThanksgivingListController::class, 'deleteItem'])->name('deleteItem');
Route::post('/completeItemRoute/{id}', [ThanksgivingListController::class, 'completeItem'])->name('completeItem');