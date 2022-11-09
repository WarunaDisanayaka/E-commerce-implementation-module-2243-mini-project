<?php

use App\Http\Controllers\AdminshopController;
use App\Http\Controllers\OrderListController;
use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\CusfrontController;
use App\Http\Controllers\CusorderController;
use App\Http\Controllers\OrderconfermationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
    $service = DB::table('services')
                ->inRandomOrder()
                ->limit(9)
                ->get();
    return view('welcome', compact('service'));
});

Route::get('gig',function(){
    return view('gig');
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
            if(Session::get('serid')){
                $sid = Session::get('serid');
                Session::forget('serid');
                return redirect()->route('front.edit', $sid);
            }
            $orders = DB::table('orders') ->get();;
            return view('user.dashboard',compact('orders'));
        }
        else{
            return view('dashboard');
        }

    })->name('dashboard');
});

Route::resource('shop', ShopController::class);
Route::resource('catagory', CatagoryController::class);
Route::resource('service', ServiceController::class);
Route::resource('adminshop', AdminshopController::class);
// Route::resource('dashboard',OrderListController::class);


Route::resource('serviceform',OrderconfermationController::class);
Route::view('serviceform2', 'user.serviceform');
Route::view('serviceform3', 'user.serviceform3');


Route::get('servicelist', function () {
    $service = DB::table('services')
                ->inRandomOrder()
                ->get();
    return view('servicelist', compact('service'));
});



Route::resource('order', OrderController::class);
Route::resource('ordercom', OrderconfermationController::class);
Route::resource('front', CusfrontController::class);
Route::resource('cusorder', CusorderController::class);
// Route::view('serviceform2', 'user.serviceform2');


//Route::view('add','seller.addservice');
//Route::post('add', [ServiceController::class, 'store']);


//Route::get('service', [ServiceController::class, 'create']);
