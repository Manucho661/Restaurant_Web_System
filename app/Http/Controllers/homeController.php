<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Chef;
use App\Models\Food;
use App\Models\Order;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    //
    public function index(){
        $usertype= Auth::user()->usertype;

        if($usertype=='admin')
        {
            return view('admin.adminhome');
        }
        else
        {
            $user_id= Auth::id();
            $cart_items= Cart::where('user_id', $user_id)->count();
            $chefs = Chef::all();
            $data = Food::all();
            return view('home', compact('data','chefs','cart_items'));
        }

    }

    public function reservation(Request $request){
        $data=new Reservation;
        $data->name= $request->name;
        $data->email= $request->email;
        $data->phone= $request->phone;
        $data->guests= $request->guests;
        $data->date= $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();
      }


      public function showCart($id){


        if( Auth::id()==$id){

        $user_id= Auth::id();
        $cart_items= Cart::where('user_id', $user_id)->count(); //number of cart items for auntheticated user.
        $data1 = cart::select('*') -> where('user_id', '=', $id)->get();  //all carts of the authenticated user.
        $data = cart::where('user_id', $id) -> join('food', 'carts.food_id', '=', 'food_id')->get(); //join food with cat table where food_id = cart_id.
        return view('showCart', compact('cart_items','data1','data'));
        }
        else{
          return redirect()->back();
        }

      }
      public function removeCart($id){
        $food_id= Cart::find($id);
        $food_id-> delete();
        return redirect()->back();

      }

      public function orderConfirm(Request $request){
        foreach ($request->food_name as $key => $foodname){
          $data = new Order;
          $data -> food_name = $foodname;
          $data -> price = $request ->price[$key];
          $data -> quantity = $request ->quantity[$key];
          $data -> name = $request -> name;
          $data -> phone = $request -> phone;
          $data -> address = $request -> address;


          $data -> save();
        }
        return redirect()->back();
      }
}
