<?php

use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CatagoryController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $role = Auth::user()->role;
        if($role == 1){
            return view('admin.admin');
        }elseif ($role == 2) {
            return view('seller.seller');
        }elseif ($role == 3) {
            return view('home');
        }
        else{
            return view('dashboard');
        }
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('shop', ShopController::class);
Route::resource('catagory', CatagoryController::class);
