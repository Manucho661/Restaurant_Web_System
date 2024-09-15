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
            <li> <a class="active"  href="{{url('/')}}">Home</a> </li>
            <li> <a href="{{url('/viewChefs')}}"> Chefs</a></li>
            <li> <a href="{{url('/users')}}">Users</a> </li>
            <li> <a href="{{url('viewOrders/')}}"> Orders</a> </li>

            <li> <a href="{{url('/users')}}">Reservations</a> </li>
            
        </ul>
    </nav>
<div class="container">
    <div class="row">
        <h3 style="color: red"> Orders</h3>
    </div>
    
            <table class="table table-striped  ">
                <thead class=" thead-dark" >
                  <tr>
                    <th >Name</th>
                    <th >Email</th>
                    <th >Phone</th>
                    <th >Date</th>
                    <th >Time</th>
                    <th >Message</th>
          
                  </tr>
                </thead>
                <tbody>
                  <tbody>
                    @foreach ($data as $item)
    
                    <tr>

                        <td> {{$item['name']}}</td>
                        <td> {{$item['email']}}</td>
                        <td> {{$item['phone']}}</td>
                        <td> {{$item['date']}}</td>
                        <td> {{$item['time']}}</td>
                        <td> {{$item['message']}}</td>
              
                    
                        <td><a  href="#"> Delete</a></td>
              
              
                        
    
                      </tr>
                        
                    @endforeach
                  
                
                </tbody>
              </table>
  
             
        


</div>


</body>
</html>