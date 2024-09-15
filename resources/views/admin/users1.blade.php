<x-app-layout>
    
</x-app-layout>

@extends('admin.layouts.bars')

@section('content')

            <table class="table table-striped  ">
                <thead class=" thead-dark" >
                  <tr>
                
                    <td>Name</td>
                    <th style="padding: 10px;">Email</th>
                    <th style="padding: 10px;">Type</th>
                    <th  style="padding: 10px;">Action</th>
                
                  </tr>
                </thead>
                <tbody>
                  <tbody>
                    @foreach ($data as $item)
    
                    <tr>
                      
                        <td>{{$item['name']}}</td>
                        <td>{{$item['email']}}</td>
                  

                        <td style="padding: 10px;"  >{{$item['usertype']}}</td>
                         @if ($item['usertype']!=='admin')
                
                         <td style="padding: 10px; "   > <a style="text-decoration:none; color:green;" href=" {{ url('/deleteuser', $item->id)}}">Delete </a></td>
                        
                
                         @else
                          <td style="padding: 10px;"  > Not Allowed</td>
                            @endif

    
                      </tr>
                        
                    @endforeach
                  
                
                </tbody>
              </table>
  
            
              @endsection


