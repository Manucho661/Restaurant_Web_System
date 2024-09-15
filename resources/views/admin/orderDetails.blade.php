<x-app-layout>
    
</x-app-layout>



@extends('admin.layouts.bars')

@section('content')

<div class="container">
  <div class="row gutters-sm">



<div class="col-md-12 mb-3">
  <div class="card mb-3">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Customer Name</h6>
        </div>
        <div class="col-sm-9 text-secondary">
          Kenneth Valdez
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Email</h6>
        </div>
        <div class="col-sm-9 text-secondary">
          fip@jukmuh.al
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Phone</h6>
        </div>
        <div class="col-sm-9 text-secondary">
          (239) 816-9029
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <h6 class="mb-0">Mobile</h6>
        </div>
        <div class="col-sm-9 text-secondary">
          (320) 380-4539
        </div>
      </div>
      <hr>
      <div class="row"  >
        <div class="col-sm-3">
          <h6 class="mb-0">Address</h6>
        </div>
        <div class="col-sm-9 text-secondary">
          Bay Area, San Francisco, CA
        </div>
         </div>
        <hr>
        <div class="row">
          <div class="col-sm-12">
            <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
          </div>

      </div>
    </div>
  </div>


  <div class="d-flex justify-content-center row">
    <div class="col-md-12">
        <div class="p-2">
            <h4>ITEMS</h4>
            <div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort by:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
            <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
            <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                <div class="d-flex flex-row product-desc">
                    <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                    <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                </div>
            </div>
          
            <div>
                <h5 class="text-grey">$20.00</h5>
            </div>
            
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
            <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
            <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                <div class="d-flex flex-row product-desc">
                    <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                    <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                </div>
            </div>
            
            <div>
                <h5 class="text-grey">$20.00</h5>
            </div>
          
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
            <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
            <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                <div class="d-flex flex-row product-desc">
                    <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                    <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                </div>
            </div>
            
            <div>
                <h5 class="text-grey">$20.00</h5>
            </div>
            
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
            <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
            <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                <div class="d-flex flex-row product-desc">
                    <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                    <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                </div>
            </div>
           
            <div>
                <h5 class="text-grey">$20.00</h5>
            </div>
            
        </div>
        <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="text" class="form-control border-0 gift-card" placeholder="discount code/gift card"><button class="btn btn-outline-warning btn-sm ml-2" type="button">Apply</button></div>
        <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><button class="btn btn-warning btn-block btn-lg ml-2 pay-button" type="button">Proceed to Pay</button></div>
    </div>
</div>
</div>

</div>
</div>


{{-- <table class="table table-striped  ">
  <thead class=" thead-dark" >
    <tr>
     
      <th style="padding: 10px;">Name</th>
      
       <th  style="padding: 10px;">Quantity</th>
       <th  style="padding: 10px;">Price</th>
       <th  style="padding: 10px;">Total Price</th>
    </tr>
  </thead>

  <tbody>
    <tbody>
       @foreach ($order->orderItems as $item)

      <tr>
         
          <td  >{{$item->food['title']}}</td>
          <td >{{$item['quantity']}}</td>
          <td  >{{$item->food['price']}}</td>
          <td  >{{$item->food['quantity'] * $item->food['price']}}</td>
          
        </tr>
          
      @endforeach
    
   
  </tbody>
</table> --}}


              @endsection 