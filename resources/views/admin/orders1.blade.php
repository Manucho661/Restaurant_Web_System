<x-app-layout>
    
</x-app-layout>


@extends('admin.layouts.bars')

@section('content')

            <table class="table table-striped  ">
                <thead class=" thead-dark" >
                  <tr>
                   
                    <th>Customer NAME</th>
                    <th >Email</th>
                    <th >Total Amount</th>
                    <th >Payment Status</th>
                    
    
                    <th >Action</th>
                    
                  </tr>
                </thead>

                <tbody>
                  <tbody>
                    @foreach ($data as $item)
    
                    <tr>
                        <td style="padding: 10px;"  >{{$item->users['name']}}</td>
                        <td>{{$item->users['email']}}</td>
                        <td>ksh 8000</td>
                        <td>Not Paid</td>
            
                        <td style="padding: 10px; "   > <a style="text-decoration: none" href=" {{ ('/orderDetails')}}">Details </a></td>
                        
                      </tr>
                        
                    @endforeach
                  
                
                </tbody>
              </table>
  
             
              @endsection