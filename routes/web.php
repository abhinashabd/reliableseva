<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/ourblog', [PageController::class, 'ourblog'])->name('ourblog');
Route::get('/blog1', [PageController::class, 'blog1'])->name('blog.blog1');
Route::get('/blog2', [PageController::class, 'blog2'])->name('blog.blog2');
Route::get('/blog3', [PageController::class, 'blog3'])->name('blog.blog3');
Route::get('/blog4', [PageController::class, 'blog4'])->name('blog.blog4');
Route::get('/blog5', [PageController::class, 'blog5'])->name('blog.blog5');