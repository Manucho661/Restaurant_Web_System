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
    
      <div style="position: relative; top:80px; background-color:gray; width:25vw; left:2vw; padding:20px; border-radius:10px; height:70vh; color:black;">

        <form action="{{url('/uploadChef')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div>

                <label for="name"> Enter name</label>
                <input type="text" name="name" placeholder="Chef" >

            </div>

            <br>
            <br>

            <div>
                <label for="email"> Enter Email</label>
                <input type="text" name="email" placeholder="chef@gmail" required>
            </div>

            <br>
            <br>

            <div>

            <label for="image">Enter Image</label>
                <input type="file" name="image" required>
            </div>

                 
                <br>
                    <br>

                



                  <div>
                    <label for="speciality"> speciality</label>
                    <input type="text" name="speciality" placeholder="speciality" required>
                </div>
                    

              

                <button>Save</button>

        </form>

      </div>

    <div style="position:relative; top:80px; left:5vw; background-color:gray; height:fit-content; width:fit-content; padding:10px; border-radius:10px;">
      <table>
        <tr  style="text-align: center">
          <th style="padding: 10px;">Title</th>
          <th style="padding: 10px;">Price</th>
          <th style="padding: 10px;">Speciality</th>
          <th  style="padding: 10px;">Image</th>
          <th  style="padding: 10px;">Action</th>
          <th  style="padding: 10px;">Action</th>

        </tr>

{{-- start of chef data --}}

        @foreach ($data as $item)
            
      
        <tr  style="text-align: center"  >

          <td> {{$item['name']}}</td>
          <td> {{$item['email']}}</td>
          <td> {{$item['speciality']}}</td>
          <td><img src="/chefsimages/{{$item['image']}}" height="40px" width="40px" alt="noma"></td>

          <td><a style="color:green; text-decoration:none;" href="{{url('/updateChefView', $item['id'])}}"> Update</a></td>
          <td><a style="color:green; text-decoration:none; " href="{{url('/deleteChef', $item['id'])}}"> Delete</a></td>

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