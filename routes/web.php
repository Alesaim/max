<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbcController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\UsermetaController;
use App\Http\Controllers\ProfileController;


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

/*Route::get('/', function () {
    return view('layout.index'); 
});*/

Route::get('/', [AbcController::class,'index']);

Route::get('/login', [LoginController::class,'login']);
Route::post('/login', [LoginController::class,'postLogin']);
Route::post('/logout', [LoginController::class,'logout']);


Route::get('/register', [RegisterController::class,'register']);
Route::post('/register', [RegisterController::class,'postRegister']);

Route::get('/features', [UserController::class,'features']);
Route::get('/pricing', [UserController::class,'pricing']);
Route::get('/contact', [UserController::class,'contact']);
Route::get('/terms', [UserController::class,'terms']);



Route::group(['middleware' => 'admin'], function() {

	Route::get('/dashboard', [UserController::class,'index']);
	Route::get('/settings', [DashboardController::class,'settings']);

	// Customers
	Route::resource('/customers','App\Http\Controllers\CustomerController');


	// Categories
	Route::resource('/categories','App\Http\Controllers\CategoryController');

	// Tax
	Route::get('/tax', [TaxController::class,'tax']);
	Route::post('/gsts/store', [TaxController::class,'addGst']);
	Route::post('/taxes/store', [TaxController::class,'addTax']);

	// UserMeta
	Route::post('/usermeta_store', [UsermetaController::class,'addUsermeta']);
	
      Route::group(['prefix' => 'profile'], function() {
            Route::get('/', [ProfileController::class, 'getProfile']);
            Route::post('/', [ProfileController::class, 'postProfile']);            
    });


});



