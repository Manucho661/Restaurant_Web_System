<?php

namespace App\Http\Controllers;
use App\Models\Cart;

use App\Models\Chef;
use App\Models\Food;
use App\Models\User;
use App\Models\Order;
use App\Models\cartItem;
use App\Models\OrderItem;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    //
  public function users(){


    $data=User::all();
    return view('admin.users1', compact('data'));

  }

  public function deleteuser($id){


    $data=User::find($id);
    $data->delete();
    return redirect()->back();

  }

  public function foodMenu(){
    $data=Food::all();
    return view('admin.food', compact('data'));


  }
  public function customers(){
    $data=Food::all();
    return view('admin.customers', compact('data'));

  }


  public function uploadFoodItem(Request $request){

    $data = new Food;

    $assignment=$request->validate([
      'description' => 'required',
      'title' => 'required',
      'image' => 'required'

  ]);
    


        // $image = $request->file('image');
         $image = $request->image; // Use file() to get the UploadedFile instance
         $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('foodimage', $imagename);
         $data->image = $imagename;
    

    $data->title= $request->title;
    $data->price= $request->price;
    $data->description = $request->description;
    $data->image=$imagename;
    $data->save();
    return redirect()->back();

  }
  public function deleteMenu($id){


    $data=Food::find($id);
    $data->delete();
    return redirect()->back();

  }
  public function updateView($id){

    $data=Food::find($id);
    return view('admin.update', compact('data'));

  }

  public function updateFoodMenu(Request $request, $id){

    $data=Food::find($id);

    $image = $request -> image;
    $imagename = time(). '.' .$image->getClientOriginalExtension();
    $request->image->move('foodimage', $imagename);

    $data->title= $request->title;
    $data->price= $request->price;
    $data->description = $request->description;
    $data->image=$imagename;
    $data->save();
    return redirect()->back();

  }
  public function orderDetails(){

    $order=Order::find(14);
    $order->load('orderItems.food');
    return view('admin.orderDetails', compact('order'));

  }

  public function viewChefs(){

    
    if(Auth::id())
    {
      $usertype= Auth::user()->usertype;

      if($usertype=='admin')
      {
    $data=Chef::all();
    
    return view('admin.Chefs1', compact('data'));
      }

      else{
        
      }

    }
    else{
      return redirect('login');
    }
  }

  public function uploadChef(Request $request){
    $data= new Chef;
    $image=$request->image;
    $imageName= time().'.'.$image->getClientOriginalExtension();
    $request->image->move('chefsimages', $imageName );

    $data->name= $request->name;
    $data->email= $request->email;
    $data->speciality=$request->speciality;
    $data->image=$imageName;
    $data->save();
    return redirect()->back();

  }

  public function deleteChef($id){

    $data=Chef::find($id);
    $data->delete();
    return redirect()->back();

  }

  public function searchOrders(Request $request){
    $search= $request->search;

    $data=Order::where('food_name','like', '%'. $search. '%' )->get();
    
    return view ('admin.Orders', compact('data'));

  }




  public function updateChefView($id){

    $data=Chef::find($id);

    return view('admin.updateChef', compact('data'));

  }


  public function updateChef(Request $request, $id){

    $data=Chef::find($id);

    $image = $request -> image;
    $imagename = time(). '.' .$image->getClientOriginalExtension();
    $request->image->move('chefsimages', $imagename);

    $data->name= $request->name;
    $data->email= $request->email;
    $data->speciality= $request->speciality;
    $data->image=$imagename;
    $data->save();
    return redirect()->back();

  }

 
  public function viewOrders(){

    $data = Order::with('users')->get();
    

    return view('admin.Orders1', compact('data'));


  }

  public function viewOrder($id){
    
   
    $order=Order::find(14);
    $order->load('orderItems.food');
   

    return view('admin.viewOrder', compact('order'));


  }

  public function removeCartItem($id){
    
   
    
    return redirect()->back();
   
  }


  


} 
