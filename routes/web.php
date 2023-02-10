<?php

use App\Http\Controllers\KaryawanController;
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
//     return view('welcome');
// });

Route::get('/', [KaryawanController::class, 'index']);
Route::get('/add-Karyawan', [KaryawanController::class, 'addKaryawan']);
Route::post('/store-Karyawan',[KaryawanController::class,'storeKaryawan']);
Route::get('/dashboard', [KaryawanController::class, 'show']);
Route::get('/edit-Karyawan/{id}',[KaryawanController::class, 'edit'])->name('edit');
Route::patch('/update-Karyawan/{id}', [KaryawanController::class, 'update'])->name('update');
Route::delete('/delete-Karyawan/{id}', [KaryawanController::class, 'delete'])->name('delete');