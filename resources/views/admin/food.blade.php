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

      {{-- Inserting Food data --}}
      <div style="position: relative; top:80px; background-color:gray; width:25vw; left:2vw; padding:20px; border-radius:10px; height:70vh; color:black;  overflow:auto;">

        <form action="{{('uploadFoodItem')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div>

                <label for="title"> Enter Title</label>
                <input type="text" name="title" placeholder="title" >

            </div>

            <br>
            <br>

            <div>
                <label for="price"> Enter Price</label>
                <input type="number" name="price" placeholder="ksh 200" required>
            </div>

            <br>
            <br>

            <div>

            <label for="image">Enter Image</label>
                <input type="file" name="impage" required>
            </div>

                 
                <br>
                    <br>

                <div>
                    

                    <label for="description"> description</label>
                <input type="text"  name="description" placeholder="description" required>

                </div>

                <button>Save</button>

       

      </div>

    <div style="position:relative; overflow:auto; top:80px; left:5vw; background-color:gray; height:fit-content; width:fit-content; padding:10px; border-radius:10px;">
      <table>
        <tr >
          <th style="padding: 10px;">Title</th>
          <th style="padding: 10px;">Price</th>
          <th  style="padding: 10px;"  >Description</th>
          <th  style="padding: 10px;"   >Image</th>
          <th  style="padding: 10px;"   >Action</th>
          <th  style="padding: 10px;"   >Action</th>

        </tr>

{{-- start of food data --}}

        @foreach ($data as $item)
            
      
        <tr  style="text-align: center"  >

          <td> {{$item['title']}}</td>
          <td> {{$item['price']}}</td>
          <td> {{$item['description']}}</td>
          <td><img src="/foodimage/{{$item['image']}}" height="40px" width="40px" alt="noma"></td>

          <td><a style="color:green; text-decoration:none;" href="{{url('/updateView', $item['id'])}}"> Update</a></td>
          <td><a style="color:green; text-decoration:none; " href="{{url('/deleteMenu', $item['id'])}}"> Delete</a></td>

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