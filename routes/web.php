<?php

use App\Http\Controllers\BiodataController;
use App\Models\Biodata;
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


Route::get('biodata', [BiodataController::class, 'index'])->name('biodata');
Route::get('biodata/create', [BiodataController::class, 'create'])->name('biodata.create');
Route::post('biodata', [BiodataController::class, 'store'])->name('biodata.store');
Route::get('biodata/{biodata}', [BiodataController::class, 'edit'])->name('biodata.edit');
Route::put('biodata/{biodata}', [BiodataController::class, 'update'])->name('biodata.update');
Route::delete('biodata/{biodata}', [BiodataController::class, 'destroy'])->name('biodata.delete');
