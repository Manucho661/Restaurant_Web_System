<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
     
      @include('admin.navbar')
      <!-- partial -->

    
<div style="position: relative; top:50px; bottom:20vh; background-color:gray; width:65vw; display:flex; left:10vw; padding:20px; border-radius:10px; height:80vh; overflow:auto; color:black; justify-content:center;">

        <form action="{{url('/updateChef', $data['id'])}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div>
                <h3>Update Food Menu</h3>

                <label for="name"> Name</label>
                <br>
                <input type="text" name="name" value="{{$data['name']}}" >

            </div>

            <br>
            <br>

            <div>
                <label for="email"> Email</label>
                <br>
                <input type="text" name="email" value="{{$data['email']}}" required>
            </div>

            <br>
            <br>



            <div>
                <label>Old Image</label>
                <img src="/chefsimages/{{$data['image']}}" alt="">

            </div>






            <div>

            <label for="image">Enter Image</label>
            <br>
                <input type="file" name="image" required>
            </div>

                 
                <br>
                    <br>

                <div>
                    

                    <label for="speciality"> speciality</label>
                    <br>
                <input type="text"  name="speciality" value="{{$data['speciality']}}" required>

                </div>

                <div style="position: relative; left:70%; color:blue;">
                    <button>Save</button>
                </div>


               

        </form>

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