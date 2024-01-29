<?php

use App\Http\Controllers\CompanieController;
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
    return view('companies.index');
});

Route::get('/companie',[CompanieController::class, 'index'])->name('companie.index');
Route::get('/companie/create',[CompanieController::class, 'create'])->name('companie.create');
Route::get('/companie/{companie}/edit',[CompanieController::class, 'edit'])->name('companie.edit');

Route::post('/companie',[CompanieController::class , 'store'])->name('companie.store');