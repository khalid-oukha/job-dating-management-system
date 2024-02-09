<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanieController;
use App\Http\Controllers\statisticsController;
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


Route::middleware(['auth','role:admin'])->group(function () {

Route::get('/companie',[CompanieController::class, 'index'])->name('companie.index');
Route::get('/companie/create',[CompanieController::class, 'create'])->name('companie.create');
Route::post('/companie',[CompanieController::class , 'store'])->name('companie.store');
Route::get('/companie/{companie}/edit',[CompanieController::class, 'edit'])->name('companie.edit');
Route::put('/update/{id}', [CompanieController::class, 'update'])->name('companie.update');
Route::delete('/companie/{companie}',[CompanieController::class, 'delete'])->name('companie.delete');

Route::resource('announcement',AnnouncementsController::class);

});

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('skill', SkillsController::class);
Route::resource('user',UserController::class);

// Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
Route::get('/profile/{profile}/show',[ProfileController::class,'index'])->name('profile.index');
Route::get('/profile/{profile}/edit',[ProfileController::class,'edit'])->name('profile.edit');
Route::put('/profile/{profile}/update',[ProfileController::class,'update'])->name('profile.update');
Route::get('/announcement/{announcement}/apply',[AnnouncementsController::class,'apply'])->name('announcement.apply');


Route::get('/statistics',[statisticsController::class, 'index'])->name('statistics.index');
