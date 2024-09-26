<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    //
    public function addQuantity($id){
        $cart=session()->get('cart');
        $quantity = $cart[$id]['quantity'];
        if($quantity>0)
        {
        $cart[$id]['quantity']=$cart[$id]['quantity']+1;
        session()->put('cart', $cart);
        return redirect()->back();
    }

    else{
        return redirect()->back();
    }
}

public function reduceQuantity($id){
    $cart=session()->get('cart');
    $quantity = $cart[$id]['quantity'];

    if($quantity>1)
    {
    $cart[$id]['quantity']= $cart[$id]['quantity']-1;
    session()->put('cart', $cart);
    return redirect()->back();
}

else{
    return redirect()->back();
}
}

public function removeCartItem($id){
    $cart=session()->get('cart');


    
    unset($cart[$id]);
    session()->put('cart', $cart);
    return redirect()->back();
}

Public function add_to_Cart(Request $request, $id){
    
    // DB::enableQueryLog();

$foodDetails=Food::find($id);

$name= $foodDetails->title;
$price= $foodDetails->price;
$description= $foodDetails->description;
$quantity=$request->quantity;
$id=$foodDetails->id;
$image=$foodDetails->image;
$cartItem= [
  "id"=>$id,
  "Name" =>$name,
  "Price"=>$price,
  "quantity" => 1,
  "Description"=>$description,
  "image"=>$image
];

if(session()->has('cart')){
$cart= session()->get('cart');
if(isset($cart[$id])){
  $cart[$id]['quantity']+=1;
}
else{
  $cart[$id] = $cartItem;
}
}
else{
  $cart= [
    $id= $cartItem
  ];
}

session()->put('cart', $cart);
$cart= session()->get('cart');
return redirect()->back();


  }
  
  public function showCart(){



      $cart=session()->get('cart');
      $totalPrice=0;
      
      if ($cart !== null){
        $cartItems= count( $cart);
      if($cartItems>0){
      foreach ($cart as $id => $item) {
        
        $totalPrice += $item['Price'] * $item['quantity'];
    }}
  }
      return view('showcart', compact('cart', 'totalPrice'));

  }


}
