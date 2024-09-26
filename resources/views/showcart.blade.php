<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-klassy-cafe.css')}}"> 

    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->

                        <a href="index.html" class="logo">
                          <h4 style=" background-color: #fb5849; margin-top:31px;font-family: 'Dancing Script', cursive; font-size: 34px; font-weight: 700;  " >Nucho</h4>
                            
                        </a>

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                     
                           
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    
    <!-- ***** Main Banner Area End ***** -->




    <!-- ***** About Area Starts ***** -->
    
    <!-- ***** About Area Ends ***** -->



  <!-- cart + summary -->
  <div style="margin-top:20vh"  >
<section class="bg-light my-5">
    <div class="container">
       
         
      <div class="row">
        <!-- cart -->
        
        <div class="col-lg-9">
          <div class="card border shadow-0">

            <div class="m-4">
              <h4 class="card-title mb-4">Your Food Items</h4>

              @if (!empty($cart))
            @foreach ($cart as $id => $item)
              
              <div class="row gy-3 mb-4">
                <div class="col-lg-5">
                  <div class="me-lg-5">
                    <div class="d-flex">
                        <img src="/foodimage/{{$item['image']}}" class="border rounded me-3" style="width: 96px; height: 96px;" alt="noma"> 
                      
                        
                      <div class="">
                        <h4 href="#" class="nav-link"> {{$item['Name']}} </h4>
                        <p class="text-muted">It is so sweet</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                  <div class="">
                    <a   href="{{url('/reduceQuantity', $id)}}"><button style="border: none; background:rgba(128,128,128,0.5); ">-</button> </a> </a> &nbsp {{$item['quantity']}} &nbsp <a   href="{{url('/addQuantity', $id)}}"> <button style="border: none; background:rgba(128,128,128,0.5); color:white; margin-right:2px;">+</button> </a>
                  </div>
                  <div class="">
                    <text class="h6">ksh {{$item['Price']*$item['quantity']}}</text> <br />
                    <small class="text-muted text-nowrap"> ksh {{$item['Price']}}/ per item </small>
 
                   
                  </div>
                </div>
                <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                  <div class="float-md-end">
                   
                    <a href="{{url('/removeCartItem', $id)}}" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                  </div>
                </div>
              </div>
              @endforeach           
              
    @else
            <i style="color: #fb5849"> Auch!! your cart is Empty</i>

    @endif
              
            </div>


  
            <div class="border-top pt-4 mx-4 mb-4">
              <p> Free Delivery within 1-2 hours</p>
              <p class="text-muted">
                
                Dear customer, we take your order with maximum care. Trust us and we shall deliver it for you.
              </p>
            </div>
          </div>
        </div>

        <!-- cart -->
        <!-- summary -->
        <div class="col-lg-3">
          
          <div class="card shadow-0 border">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="mb-2">Total price:</p>
                <p class="mb-2">Ksh {{$totalPrice}} </p>
              </div>
              <div class="d-flex justify-content-between">
                <p class="mb-2">Discount:</p>
                <p class="mb-2 text-success">-ksh 0.00</p>
              </div>
              <div class="d-flex justify-content-between">
                <p class="mb-2">TAX:</p>
                <p class="mb-2">ksh 0.00</p>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <p class="mb-2">Total price:</p>
                <p class="mb-2 fw-bold">ksh {{$totalPrice}} </p>
              </div>
              
              <div class="mt-3">
                @if (!empty($cart))
                <a href="{{url('/checkout')}}" class="btn btn-success w-100 shadow-0 mb-2">  Proceed to Check Out</a>
                @endif
                <a href="{{url('/')}}" class="btn btn-light w-100 border mt-2"> Back to shop </a>
              </div>

            </div>
          </div>
        </div>
        <!-- summary -->
      </div>
    </div>
  </section>
  <!-- cart + summary -->
  <br>
     
  </div>
  <br>

   


</div>




    <!-- ***** About Area Starts ***** -->
   
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
   
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                      <h4 style=" background-color: #fb5849; margin-top:31px;font-family: 'Dancing Script', cursive; font-size: 34px; font-weight: 700;  " >Nucho</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Nucho Cafe Co.
                        
                        <br>Design: Nucho</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('assets/js/popper.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/accordions.js')}}"></script>
    <script src="{{asset('assets/js/datepicker.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/imgfix.min.js')}}"></script> 
    <script src="{{asset('assets/js/slick.js')}}"></script> 
    <script src="{{asset('assets/js/lightbox.js')}}"></script> 
    <script src="{{asset('assets/js/isotope.js')}}"></script> 
    
    <!-- Global Init -->
<script src="{{asset('assets/js/custom.js')}}"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>