@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col">
       <!-- Grid row -->
<div class="row">

    <!-- Grid column -->
    <div class="col-md-12 d-flex justify-content-center mb-5">
  
      <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
      <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button>
      <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button>
  
    </div>
    <!-- Grid column -->
  
  </div>
  <!-- Grid row -->
  
  <!-- Grid row -->
  <div class="gallery" id="gallery">
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
  </div>
  <!-- Grid row -->
</div>
</div>

</div>

@endsection