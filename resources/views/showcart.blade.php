<!DOCTYPE html>
<html lang="en">

  <head>
<base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <title>Klassy Cafe - Nucho Restaurant </title>
<!--
    
TemplateMo 558 Klassy Cafe
/
https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

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
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 

                            <li class="scroll-to-section"><a style="color: green" href="#reservation">
                                
                                @auth
                                Cart [{{$cart_items}}]
                                @endauth
                                
                                @guest
                                Cart [0]
                                @endguest
                              </a>
                        
                        </li> 

                        


                             {{-- <li class="scroll-to-section" > --}}

                                @if (Route::has('login'))
                                {{-- <div> --}}
                                    
                                    @auth

                                       <li  class="scroll-to-section"> 

                                       <x-app-layout>
    
                                       </x-app-layout>

                                       </li>
                                
                                    @else

                                        <li  class="scroll-to-section"> <a href="{{ route('login') }}" >Log in</a> </li> 
                
                                        @if (Route::has('register'))
                                        <li class="scroll-to-section" > <a href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth
                                {{-- </div>  --}}
                                @endif


                             {{-- </li> --}}


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

<div style="align: center; position:relative; left:45vw;" id='top'>
<table style="align: center; background-color:gray;">
<tr>
<th style="padding: 10px;">  Food Name </th>
<th  style="padding: 10px;">  Price </th>
<th  style="padding: 10px;" > quantity  </th>

</tr>

<form action="{{url('orderConfirm')}}">
    @csrf
@foreach ($data as $item)
<tr style="align:center;">
    <td style="padding: 10px;"> <input type="text" name="food_name[]" value="{{$item['title']}}" hidden="">
    {{$item['title']}}
</td>  
    <td style="padding: 10px;">
        <input type="text" name="price[]" value="{{$item['price']}}" hidden="">
        {{$item['price']}}</td>
    <td style="padding: 10px;">
        <input type="text" name="quantity[]" value="{{$item['quantity']}}" hidden="">
        {{$item['quantity']}}</td>
    </tr>
@endforeach


<tr>
    @foreach ($data1 as $item1)
    <td><a href="{{url('/removeCart', $item1['id'])}}"  class="btn btn-warning"> Remove </a> </td>
    @endforeach
</tr>


</table>
</div>  
      
<div id="order" style="align:center; padding:10px; position:relative; left:50vw;">

<button type="button" class="btn btn-primary">Order now</button>

</div>

<div id="appear" style="align:center; padding:10px; position:relative; left:45vw; display:none; ">

    <label for=""> Name</label>
    <br>
 <input type="text" name="name">
 <br> 
 
<label for="phone">Phone Number</label>
<br>
<input type="number" name="phone">
<br>

<label for="address">Address</label>
<br>
<input type="number" name="address">
<br>
<br>

<span>
<input class="btn btn-success" type="submit" value="Order Confirm">\
<button> Submit</button>
<button id="close" type="button" class="btn btn-danger">Close</button>

</span>


</div>

</form>
    <!-- jQuery -->

    <script type="text/javascript">
    $("#order").click(
        function(){

            $("#appear").show()
        }

    )

    $("#close").click(
        function(){

            $("#appear").hide()
        })
    
    
    </script>
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
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