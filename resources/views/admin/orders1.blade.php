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
           
            <li> <a class="active"  href="{{url('/home')}}">Home</a> </li>
          <li> <a href="{{url('/viewChefs')}}"> Chefs</a></li>
          <li> <a href="{{url('/users')}}">Users</a> </li>
          <li> <a href="{{url('/viewOrders')}}"> Orders</a> </li>

          <li> <a href="{{url('/viewReservations')}}">Reservations</a> </li>
            
        </ul>
    </nav>
<div class="container">
    <div class="row">
        <h3 style="color: red"> Orders</h3>
    </div>
    
            <table class="table table-striped  ">
                <thead class=" thead-dark" >
                  <tr>
                   
                    <th>Customer NAME</th>
                    <th >Email</th>
                    <th >Total Amount</th>
                    <th >Payment Status</th>
                    <th >Payment Method</th>
    
                    <th >Status</th>
                    
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
                        <td>N/A</td>
                        <td style="padding: 10px; "   > <a style="text-decoration: none" href=" {{ url('/viewOrder', $item->id)}}">View Items </a></td>
                        
                      </tr>
                        
                    @endforeach
                  
                
                </tbody>
              </table>
  
             
        


</div>


</body>
</html>