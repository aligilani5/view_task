<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsumeApiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Web route for Categories with product's price greater than 500
Route::get('/getCategoriesWithProductsPrice', [ConsumeApiController::class, 'getCategoriesWithProductsPrice']);

//Web route for top 5 Categories with products
Route::get('/getCategoriesWithNewListedProducts', [ConsumeApiController::class, 'getCategoriesWithNewListedProducts']);

//Web route for Categories with atleast products
Route::get('/getAllCategoriesWithAtleastProduct', [ConsumeApiController::class, 'getAllCategoriesWithAtleastProduct']);
