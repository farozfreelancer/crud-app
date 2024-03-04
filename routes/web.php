<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/forms', [CrudController::class, 'form_view'])->name('form_view');
Route::post('/insert', [CrudController::class, 'insert'])->name('insert');
Route::get('/', [CrudController::class, 'display'])->name('display');
Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('edit');
Route::put('/update/{+}', [CrudController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [CrudController::class, 'delete'])->name('delete');
