<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanieController;
use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\UserController;
use App\Models\User;

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


Route::middleware(['auth','role:admin'])->group(function () {

Route::get('/companie',[CompanieController::class, 'index'])->name('companie.index');
Route::get('/companie/create',[CompanieController::class, 'create'])->name('companie.create');
Route::post('/companie',[CompanieController::class , 'store'])->name('companie.store');
Route::get('/companie/{companie}/edit',[CompanieController::class, 'edit'])->name('companie.edit');
Route::put('/update/{id}', [CompanieController::class, 'update'])->name('companie.update');
Route::delete('/companie/{companie}',[CompanieController::class, 'delete'])->name('companie.delete');

Route::resource('announcement',AnnouncementsController::class);

});

Route::middleware(['guest',''])->group(function () {
Auth::routes();
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('skill', SkillsController::class);
Route::resource('user',UserController::class);