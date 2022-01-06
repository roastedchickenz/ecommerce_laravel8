<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


route::get('/home', [HomeController::class, 'redirect_to_dashboard']);

route::get('/', [HomeController::class, 'index']);



route::get('/upload_product', [AdminController::class, 'upload_product']);

route::post('/uploading_product', [AdminController::class, 'uploading_product']); 

route::get('/show_product', [AdminController::class, 'show_product']); 

route::get('/delete_product/{id}', [AdminController::class, 'delete_product']); 

route::get('/edit_product/{id}', [AdminController::class, 'edit_product']); 

route::post('/editing_product/{id}', [AdminController::class, 'editing_product']); 


Route::get('cart', [HomeController::class, 'cart']);
route::post('/add_to_cart/{id}', [HomeController::class, 'add_to_cart']); 

route::get('/delete_from_cart/{id}', [HomeController::class, 'delete_from_cart']); 

route::post('/buying_product', [HomeController::class, 'buying_product']); 

