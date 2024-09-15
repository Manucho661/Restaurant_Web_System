<x-app-layout>
    
</x-app-layout>

@extends('admin.layouts.bars')

@section('content')


    
            <table class="table table-striped  ">
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
                    {{-- @foreach ($order->orderItems as $item)
    
                    <tr>
                       
                        <td  >{{$item->food['title']}}</td>
                        <td >{{$item['quantity']}}</td>
                        <td  >{{$item->food['price']}}</td>
                        <td  >{{$item->food['quantity'] * $item->food['price']}}</td>
                        
                      </tr>
                        
                    @endforeach
                  
                 --}}
                </tbody>
              </table>
  
             
              @endsection


