<?php

use App\Models\Cart;
use App\Models\Chef;
use App\Models\Food;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $user_id= Auth::id();
    $cart_items= Cart::where('user_id', $user_id)->count();
    $data = Food::all();
    // compact('data');
    $chefs = Chef::all();
    return view('home', compact('data', 'chefs','cart_items' ));
});

// HOME CONTROLLERS.

Route::get('/redirects',[homeController::class, 'index']);
Route::get('/deleteChef/{id}',[adminController::class, 'deleteChef']);
Route::post('/reservation',[homeController::class, 'reservation']);
Route::get('/showCart/{id}',[homeController::class, 'showCart']);
Route::get('/removeCart/{id}',[homeController::class, 'removeCart']);
Route::get('/orderConfirm',[homeController::class, 'orderconfirm']);



// ADMIN CONTROLLERS
Route::post('/updateChef/{id}',[adminController::class, 'updateChef']);
Route::get('/updateChefView/{id}',[adminController::class, 'updateChefView']);
Route::post('/add_to_Cart/{id}',[adminController::class, 'add_to_Cart']);
Route::post('/uploadChef',[adminController::class, 'uploadChef']);
Route::get('/viewChefs',[adminController::class, 'viewChefs']);
Route::get('/viewReservations',[adminController::class, 'viewReservations']);
Route::get('/updateView/{id}',[adminController::class, 'updateView']);
Route::post('/updateFoodMenu/{id}',[adminController::class, 'updateFoodMenu']);
Route::get('/deleteMenu/{id}',[adminController::class, 'deleteMenu']);
Route::get('/users',[adminController::class, 'users']);
Route::post('/uploadFoodItem',[adminController::class, 'uploadFoodItem']);
Route::get('/foodMenu',[adminController::class, 'foodMenu']);
Route::get('/deleteuser/{id}',[adminController::class, 'deleteuser']);
Route::get('/viewOrders',[adminController::class, 'viewOrders']);
Route::get('/searchOrder',[adminController::class, 'SearchOrders']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
