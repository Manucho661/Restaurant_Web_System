<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
      <h3 style="color: red">FOOD ITEMS</h3>
  </div>
  
          <table class="table table-striped  ">
              <thead class=" thead-dark" >
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Food</th>
                  <th scope="col">Price</th>
                  <th scope="col">Image</th>
                  <th scope="col">Description</th>
                  <th scope="col"> Action</td>
                  <th scope="col">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($data as $item)
  
                  <tr>
                      <th> {{$item['id']}}</th>
                      <td>{{$item['title']}}</td>
                      <td>{{$item['price']}} </td>
                     
  
                      <td><img src="/foodimage/{{$item['image']}}" height="40px" width="40px" alt="noma"></td>
                      <td> {{$item['description']}}</td>
                      <td><a style="color:green; text-decoration:none;" href="{{url('/updateView', $item['id'])}}"> Update</a></td>
                      <td><a style="color:green; text-decoration:none; " href="{{url('/deleteMenu', $item['id'])}}"> Delete</a></td>
  
                    </tr>
                      
                  @endforeach
                
              
              </tbody>
            </table>

           
            <form class="form-horizontal" action="/uploadFoodItem" method="POST" enctype="multipart/form-data">

             <h5 style="color: black">Add Food Item</h5>

              @csrf
              <div class="form-group">
                <label class="control-label col-sm-2" for="title">Food:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="Food" placeholder="Githeri" name="title">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="price">Price:</label>
                <div class="col-sm-10">          
                  <input type="number" class="form-control" id="date" placeholder="Enter price" name="price">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-sm-2" for="image">Image:</label>
                <div class="col-sm-10">          
                  <input type="file" class="form-control" id="image" name="image" required >
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-sm-2" for="Description">Description:</label>
                <div class="col-sm-10">          `
                  <input type="texts" class="form-control" id="description" placeholder="Enter description" name="description">
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
      
  </body>
</html>