
    @extends('layouts.app1')

@section('title', 'Home Page')

@section('content')
  

  <h1>NUCHO</h1>
  
</div> 


<div class="container rounded bg-gradient-to-right bg-opacity-75  p-3" style="margin-top:12px; background:white" >

  <div class="row shadow-sm p" style="padding: 30px;">
    <div class="col-lg-10">
      <b >SHIPPING INFORMATION</b>
    <div> <span>{{$user['name']}} </span> </div>
    <div> <span>{{$user['email']}} </span> <span>{{$user['city']}} </span>  <span>{{$user['address']}} </span> </div>
    </div>
    
    <div class="col-lg col-sm-2 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
      <div class="float-md-end">
        <text class="h6">  <button onclick="on()">Edit</button>  </text> <br />
        
      </div>
    </div>
 </div>
 
  @foreach ($cart as $id => $item)
  <div class="row shadow-sm p" style="padding: 30px;"> 

    <div class="col-lg-10">
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

    <div class="col-lg col-sm-2 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
      <div class="float-md-end">
        <text class="h6">ksh {{$item['Price']*$item['quantity']}}</text> <br />
        <small class="text-muted text-nowrap"> ksh {{$item['Price']}}/ per item </small>
      </div>
    </div>
  </div>
  @endforeach
  

  <div id="overlay"  onclick="off()" class="row mt-3 mx-3" style="margin-top: 20vh;">
    
    <div  class="col-md-12 justify-content-center">
      <div class="card card-custom pb-4">
        <div class="card-body mt-0 mx-5">
          <div class="text-center mb-3 pb-2 mt-3">
            <h4 style="color: #495057 ;">Shopping Information</h4>
          </div>
  
          <form class="mb-0"  action="{{url('orderConfirm')}}" method="POST" >
            @csrf
  
            <div class="row mb-4"  >
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" id="form9Example1" value="{{$user['name']}}" class="form-control input-custom text-danger  " />
                  <label class="form-label" for="form9Example1">First name</label>
                </div>
              </div>
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" id="form9Example2" class="form-control input-custom" />
                  <label class="form-label" for="form9Example2">Last name</label>
                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" name="city" id="form9Example3" class="form-control input-custom" />
                  <label class="form-label" for="form9Example3">City</label>
                </div>
              </div>
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" name="zip" id="form9Example4" class="form-control input-custom" />
                  <label class="form-label" for="form9Example4">Zip</label>
                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" name="address" id="form9Example6" class="form-control input-custom" />
                  <label class="form-label" for="form9Example6">Address</label>
                </div>
              </div>
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                  <input type="email" id="typeEmail" value="{{$user['email']}}" class="form-control input-custom  text-danger " />
                  <label class="form-label" for="typeEmail">Email</label>
                </div>
              </div>
            </div>
  
            <div class="float-end ">
              <!-- Submit button -->
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-rounded"
                style="background-color: #0062CC ;">Edit</button>
            </div>
  
          </form>
        </div>
      </div>
    </div>
  </div>

</div>



<script>
  function on() {
    document.getElementById("overlay").style.display = "block";
  }
  
  function off() {
    document.getElementById("overlay").style.display = "none";
  }
  </script>
@endsection
