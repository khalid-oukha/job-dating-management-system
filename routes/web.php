<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanieController;
use App\Http\Controllers\AnnouncementsController;

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


Route::middleware(['isAdmin','auth'])->group(function () {

Route::get('/companie',[CompanieController::class, 'index'])->name('companie.index');
Route::get('/companie/create',[CompanieController::class, 'create'])->name('companie.create');
Route::post('/companie',[CompanieController::class , 'store'])->name('companie.store');
Route::get('/companie/{companie}/edit',[CompanieController::class, 'edit'])->name('companie.edit');
Route::put('/update/{id}', [CompanieController::class, 'update'])->name('companie.update');
Route::delete('/companie/{companie}',[CompanieController::class, 'delete'])->name('companie.delete');
});

Route::resource('announcement',AnnouncementsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
