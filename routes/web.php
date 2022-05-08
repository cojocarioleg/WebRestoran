<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/blog/{slug}', [BlogController::class, 'showBlog'])->name('showBlog');
Route::get('/menu/{slug}', [MenuController::class, 'showCategory'])->name('showCategory');
Route::get('/menu/{categorySlug}/{productSlug}', [MenuController::class, 'showProduct'])->name('showProduct');

Route::post('/reservation', [ReservationController::class, 'reservation'])->name('reservation');
Route::post('/contact', [ContactController::class, 'message'])->name('message');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
