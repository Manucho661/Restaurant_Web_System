<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Chef;
use App\Models\Food;
use App\Models\Order;
use App\Models\OrderItem;
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
          $data=Food::all();
          return view('admin.adminhome', compact('data'));      

        }
        else
        {
            $user_id= Auth::id();
            $cart = session()->get('cart', []);
            // $cart_items= Cart::where('user_id', $user_id)->count();
            
            $chefs = Chef::all();
            $data = Food::all();
            return view('home', compact('data','chefs','cart'));
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


      
      public function removeCart($id){
        $food_id= Cart::find($id);
        $food_id-> delete();
        return redirect()->back();

      }

      public function order(Request $request){
        $order = new Order;
        $user_id = Auth::id();
        $order_item = new OrderItem;
        $new_order= $order::create([
          'user_id'=>$user_id,
        ]);

        $cart= session()->get('cart');

        foreach($cart as $id=> $item){
          $food_id=$item['id'];
          $order_item::create( [
            'food_id'=>$food_id,
            'quantity'=>'1',
            'order_id' => $new_order->id,
          ]);

          session()->forget('cart');
          // return redirect()->back();




          $user_id= Auth::id();
          $cart = session()->get('cart', []);
          $data = Food::all();
          // compact('data');
          $chefs = Chef::all();
          return view('home', compact('data', 'chefs','cart' ));
          

        }



       
          
       
        // return redirect()->back();
      }

      public function submitOrder($id){
        
        $cart=Cart::find($id);



      }
}
