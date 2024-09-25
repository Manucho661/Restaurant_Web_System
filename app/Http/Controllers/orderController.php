<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Food;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\DeliveryDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class orderController extends Controller
{
    //
    public function checkout(){
      $cart=session()->get('cart');
        $user= Auth::user();
      
        return view('checkout', compact('user','cart')); 

      }

      public function order(Request $request){
        $Delivery_details=$request->validate([
          'city' => 'required',
          'address' => 'required',
          'zip' => 'required'
    
      ]);
        $newDeliverydetails = new DeliveryDetail;
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
            'user_id' =>$user_id
          ]);


           $Delivery_details['user_id'] = $user_id;
           $Delivery_details['order_id'] = $new_order->id;
           $newDeliverydetails::create($Delivery_details);
           session()->forget('cart');
          // return redirect()->back();


          $user_id= Auth::id();
          $cart = session()->get('cart', []);
          $data = Food::all();
         
          $chefs = Chef::all();


          Session::flash('success', 'Order submitted successfully!');
          // dd(session()->all());
          return redirect()->route('home', compact('data', 'chefs','cart' )); 

        }



       
          
       
        // return redirect()->back();
      }

      
}
