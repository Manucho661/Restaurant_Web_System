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