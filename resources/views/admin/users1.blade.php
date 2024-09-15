<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
  
            <i  class="fas fa-bars"> Menu</i>
        </label>
  
        <label class="logo"> NUCHO </label>
        <ul>
            <li> <a class="active"  href="{{url('/')}}">Site</a> </li>
            <li> <a href="{{url('/viewChefs')}}"> Chefs</a></li>
            <li> <a href="{{url('/viewChefs')}}">Users</a> </li>
            <li> <a href="{{url('/viewOrders')}}"> Orders</a> </li>

            <li> <a href="{{url('/users')}}">Reservations</a> </li>
            
            
        </ul>
    </nav>
<div class="container">
    <div class="row">
        <h3 style="color: red"> Users</h3>
    </div>
    
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
  
            



</div>


</body>
</html>