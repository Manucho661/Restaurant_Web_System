<section class="section" id="menu">
  <div class="container">
      <div class="row">
          <div class="col-lg-4">
              <div class="section-heading">
                  <h6>Our Menu</h6>
                  <h2>Our selection of cakes with quality taste</h2>
              </div>
          </div>
      </div>
  </div>
  <div class="menu-item-carousel">
      <div class="col-lg-12">
          <div class="owl-menu-item owl-carousel">


      @foreach ($data as $food)
    <form action="{{url('add_to_Cart', $food['id'])}}" method="POST" >
      
        @csrf
              <div class="item">
                  <div style="background-image: url('/foodimage/{{$food['image']}}');" class='card'>
                      <div class="price"><h6> {{$food['price']}}</h6></div>
                      <div class='info'>
                        <h1 class='title'>{{$food['title']}}</h1>
                        <p class='description'>  {{$food['description']}}  </p>
                        <div class="main-text-button">
                            <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                        </div>
                      </div>
                  </div>
              </div>
              <div>
                <br>
                <input type="number" name="quantity" min="1" style="width: 80px" placeholder="1">
                 <input type="submit" value="Add to Cart">


              </div>
              
    </form>


              @endforeach


          </div>
      </div>
  </div>
</section>