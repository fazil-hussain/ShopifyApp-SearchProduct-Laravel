<?php

use App\Http\Controllers\SearchProductController;
use App\Models\User;
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

Route::get('/', function () {
    return view('index');
})->middleware(['auth.shopify'])->name('home');

// Route::get('/login', [UserController::class,'login'])->name('login');
Route::get('/login',function(){
    return view('login');
});

Route::post('/searchproduct',[SearchProductController::class,'searchproduct']);
