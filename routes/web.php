<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardOrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/{slug}', [BlogController::class, 'show']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
// Route::get('/guestlogin', [LoginController::class, 'guestauthenticate'])->name('guestlogin.guestauthenticate');

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/signup', [SignupController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignupController::class, 'store']);
Route::post('/guestsignup', [SignupController::class, 'guest'])->middleware('guest');;



Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cartdetail', [CartDetailController::class, 'store'])->name('cartdetail.store');
    Route::patch('/cartdetail/{id}', [CartDetailController::class, 'update'])->name('cartdetail.update');
    Route::delete('/cartdetail/{id}', [CartDetailController::class, 'destroy'])->name('cartdetail.destroy');
});

Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/checkout', [CartController::class, 'store'])->name('cart.store');
Route::get('/completed', [CartController::class, 'completed']);

Route::get('/send-email', [MailController::class, 'sendEmail']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->middleware('admin');

Route::get('/dashboard/blogs/checkSlug', [DashboardBlogController::class, 'checkSlug'])->middleware('auth')->middleware('admin');
Route::resource('/dashboard/blogs', DashboardBlogController::class)->middleware('auth')->middleware('admin');


Route::resource('/dashboard/products', DashboardProductController::class)->middleware('auth')->middleware('admin');
Route::resource('/dashboard/orders', DashboardOrderController::class)->middleware('auth')->middleware('admin');
