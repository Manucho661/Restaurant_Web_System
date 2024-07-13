<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
     
      @include('admin.navbar')
      <!-- partial -->
    
      <div style="position:relative; top:60px; left:10vw; ">
        <div style="position: relative; left:80%; color: black; ">

        <form  action="{{url('/searchOrder')}}">

            <input style="color: black;" type="text" name="search" placeholder="foodname">

            <input type="submit" value="Search" class="btn btn-success">
        </form>
<br>
    </div>

        <table style="padding: 10px; background-color:gray;  width:60vw">
          <tr style="padding-left: 10px">
              <th style="padding: 10px;">Food</th>
              <th  style="padding: 10px;">Price</th>
              <th  style="padding: 10px;">Quantity</th>
              <th style="padding: 10px;">Name</th>
              <th style="padding: 10px;">Phone</th>
              <th style="padding: 10px;">Address</th>
              <th style="padding: 10px;">Total Price</th>
  
          </tr>
  
          @foreach ($data as $item)
          <tr >
              <td style="padding: 10px;"  >{{$item['food_name']}}</td>
              <td  style="padding: 10px;"  >KSH {{$item['price']}}</td>
              <td style="padding: 10px;"  >{{$item['quantity']}}</td>
              <td style="padding: 10px;"  >{{$item['name']}}</td>
              <td style="padding: 10px;"  >{{$item['phone']}}</td>
              <td style="padding: 10px;"  >{{$item['address']}}</td>
              <td style="padding: 10px;"  > KSH {{$item['price'] * $item['quantity']}}</td>
              @if ($item['usertype']!=='admin')
                  
                  <td style="padding: 10px; "   > <a style="text-decoration:none; color:green;" href=" {{ url('/deleteuser', $item->id)}}">Delete </a></td>
              
                  
              @else
                  <td style="padding: 10px;"  > Not Allowed</td>
              @endif
  
          </tr>
  
          @endforeach
  
         
  
  
  
  
  
  
        </table>
      
      </div>

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>