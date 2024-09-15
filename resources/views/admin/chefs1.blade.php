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
            <li> <a href="{{url('/viewOrders')}}"> Orders</a> </li>
            <li> <a href="{{url('/users')}}">Update</a> </li>
            <li> <a href="{{url('/users')}}">Reservation</a> </li>
            
        </ul>
    </nav>
<div class="container">
    <div class="row">
        <h3 style="color: red"> Our Chefs</h3>
    </div>
    
            <table class="table table-striped  ">
                <thead class=" thead-dark" >
                  <tr>
                    <th scope="col">id</th>
                    <th style="padding: 10px;">Email</th>
                    <th style="padding: 10px;">Speciality</th>
                    <th  style="padding: 10px;">Image</th>
                    <th  style="padding: 10px;">Action</th>
                    <th  style="padding: 10px;">Action</th>
          
                    
                  </tr>
                </thead>
                <tbody>
                  <tbody>
                    @foreach ($data as $item)
    
                    <tr>
                        <th> {{$item['id']}}</th>
                        <td>{{$item['email']}}</td>
                        <td>{{$item['speciality']}} </td>
                        <td><img src="/chefsimages/{{$item['image']}}" height="40px" width="40px" alt="noma"></td>
                        <td><a style="color:green; text-decoration:none;" href="{{url('/updateChefView', $item['id'])}}"> Update</a></td>
                        <td><a style="color:green; text-decoration:none; " href="{{url('/deleteChef', $item['id'])}}"> Delete</a></td>
                    
    
                      </tr>
                        
                    @endforeach
                  
                
                </tbody>
              </table>
  
             
              <form class="form-horizontal" action="/uploadFoodItem" method="POST">
  
               <h5 style="color: black">Add CHEF<h5>
  
                @csrf
                <div class="form-group">
                  <label class="control-label col-sm-2" for="title">Name:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="chef" placeholder="chef" name="chef">
                  </div>
                </div>
  
                <div class="form-group">
                  <label class="control-label col-sm-2" for="Speciality">Speciality:</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="date" placeholder="Pastry" name="Speciality">
                  </div>
                </div>
  
  
                <div class="form-group">
                  <label class="control-label col-sm-2" for="image">Image:</label>
                  <div class="col-sm-10">          
                    <input type="file" class="form-control" id="image" name="image" required >
                  </div>
                </div>
                <br>


                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  </div>
                </div>
              </form>
        
        
    
  
  
  
    </div>


</div>


</body>
</html>