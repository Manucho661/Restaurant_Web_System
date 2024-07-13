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
      <div style="position:relative; top:80px; left:2vw; background-color:gray; height:fit-content; width:fit-content; padding:10px; border-radius:10px;">
        <table>
          <tr style="text-align: center">
            <th style="padding: 10px;">Name</th>
            <th style="padding: 10px;">Email</th>
            <th  style="padding: 10px;">Phone</th>
            <th  style="padding: 10px;">Date</th>
            <th  style="padding: 10px;">Time</th>
            <th  style="padding: 10px;">Message</th>
  
          </tr>
  
  {{-- start of food data --}}
  
          @foreach ($data as $item)
              
        
          <tr  style="text-align: center"  >
  
            <td style="padding: 10px;" > {{$item['name']}}</td>
            <td style="padding: 10px;"  > {{$item['email']}}</td>
            <td  style="padding: 10px;"> {{$item['phone']}}</td>
            <td style="padding: 10px;"  >{{$item['date']}}</td>
            <td style="padding: 10px;"  >{{$item['time']}}</td>
            <td style="padding: 10px;" >{{$item['message']}}</td>
  
        
            <td><a style="color:green; text-decoration:none; " href="#"> Delete</a></td>
  
  
  
  
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