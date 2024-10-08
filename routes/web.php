<?php

use App\Models\Cart;
use App\Models\Chef;
use App\Models\Food;
use App\Http\Controllers\order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\payController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\orderController;

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
    $cart = session()->get('cart', []);
    $data = Food::all();
    $chefs = Chef::all();
  
    return view('home', compact('data', 'chefs', 'cart'));
}) ->name('home');

// HOME CONTROLLERS.

Route::get('/redirects',[homeController::class, 'index']);
Route::get('/deleteChef/{id}',[adminController::class, 'deleteChef']);
Route::post('/reservation',[homeController::class, 'reservation']);

Route::get('/removeCart/{id}',[homeController::class, 'removeCart']);

Route::get('/submitOrder/{id}',[homeController::class, 'submitOrder']);


// ADMIN CONTROLLERS
Route::post('/updateChef/{id}',[adminController::class, 'updateChef']);
Route::get('/updateChefView/{id}',[adminController::class, 'updateChefView']);

Route::post('/uploadChef',[adminController::class, 'uploadChef']);
Route::get('/viewChefs',[adminController::class, 'viewChefs']);
Route::get('/orderDetails',[adminController::class, 'orderDetails']);
Route::get('/updateView/{id}',[adminController::class, 'updateView']);
Route::post('/updateFoodMenu/{id}',[adminController::class, 'updateFoodMenu']);
Route::get('/deleteMenu/{id}',[adminController::class, 'deleteMenu']);
Route::get('/users',[adminController::class, 'users']);
Route::post('/uploadFoodItem',[adminController::class, 'uploadFoodItem']);
Route::get('/foodMenu',[adminController::class, 'foodMenu']);
Route::get('/deleteuser/{id}',[adminController::class, 'deleteuser']);
Route::get('/viewOrders',[adminController::class, 'viewOrders']);
Route::get('/searchOrder',[adminController::class, 'SearchOrders']);
Route::get('/customers',[adminController::class, 'customers']);

// orders
Route::get('/viewOrder/{id}',[adminController::class, 'viewOrder']);
Route::get('/removeCartItem/{id}',[adminController::class, 'removeCartItem']);

Route::post('/orderConfirm',[orderController::class, 'order']);

//cart
Route::get('/addQuantity/{id}',[cartController::class, 'addQuantity']);
Route::get('/reduceQuantity/{id}',[cartController::class, 'reduceQuantity']);
Route::get('/removeCartItem/{id}',[cartController::class, 'removeCartItem']);
Route::post('/add_to_Cart/{id}',[cartController::class, 'add_to_Cart']);
Route::get('/showCart',[cartController::class, 'showCart']);

//order
Route::get('/checkout',[orderController::class, 'checkout'])->middleware('auth');
Route::get('/pay/{totalPrice}',[payController::class, 'pay']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
