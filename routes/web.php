<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeAController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileAController;
use App\Http\Controllers\ContactAController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
//Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
//Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/login', [LoginController::class, 'index']);



// CRUD routes for Home model
Route::get('/home', [HomeAController::class, 'index'])->name('home.index');
Route::get('/home/create', [HomeAController::class, 'create'])->name('home.create');
Route::post('/home', [HomeAController::class, 'store'])->name('home.store');
Route::get('/home/{home}/edit', [HomeAController::class, 'edit'])->name('home.edit');
Route::put('/home/{home}', [HomeAController::class, 'update'])->name('home.update');
Route::delete('/home/{home}', [HomeAController::class, 'destroy'])->name('home.destroy');


Route::get('/addprofile', [ProfileAController::class, 'index'])->name('profile.index');
Route::get('/addprofile/create', [ProfileAController::class, 'create'])->name('profile.create');
Route::post('/addprofile', [ProfileAController::class, 'store'])->name('profile.store');
Route::get('/addprofile/{profile}/edit', [ProfileAController::class, 'edit'])->name('profile.edit');
Route::put('/addprofile/{profile}', [ProfileAController::class, 'update'])->name('profile.update');
Route::delete('/addprofile/{profile}', [ProfileAController::class, 'destroy'])->name('profile.destroy');

Route::get('/addcontact', [ContactAController::class, 'index'])->name('contact.index');
Route::get('/addcontact/create', [ContactAController::class, 'create'])->name('contact.create');
Route::post('/addcontact', [ContactAController::class, 'store'])->name('contact.store');
Route::get('/addcontact/{contact}/edit', [ContactAController::class, 'edit'])->name('contact.edit');
Route::put('/addcontact/{contact}', [ContactAController::class, 'update'])->name('contact.update');
Route::delete('/addcontact/{contact}', [ContactAController::class, 'destroy'])->name('contact.destroy');