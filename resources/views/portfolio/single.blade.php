@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <img class="img-fluid" src="https://www.thespruce.com/thmb/mj57Tjew3HR5eVnplxKCq1X7jeg=/2119x1192/smart/filters:no_upscale()/GettyImages-1161177015-f1de4ba58a6c4f50969d9119d80405a6.jpg" alt="">
        </div>
        
    </div>
    <div class="row my-4">
        <div class="col">
            <h2>Description</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id, quod modi consequuntur vel tempore officia minima. Cumque, et iusto exercitationem quas minima, officiis voluptates eligendi sed consequuntur natus aliquam dicta!</p>
        </div>
    </div>
    <!-- Gallery -->
    <h2>Gallery</h2>
<div class="row">
  
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
  
      <img
        src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
  
      <img
        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
  
      <img
        src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>
  </div>

  <hr>
  <!-- Gallery -->

  {{-- <h2>See More</h2> --}}
      <!-- Set up your HTML -->
    <div class="row mx-1">
<div class="owl-carousel">
    <div class="col">
       
        <div class="row">
            <div>
                <img class="img-fluid" src="https://mlbostoncommon.com/get/files/image/galleries/interior-deign-spacejoy-unsplash.jpg" alt="">
            </div>
            <div ><span>Article Title</span>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing?</h4>
                <small>Jane Doe</small>
            </div>
    
        </div>
    </div>

    <div class="col">
       
        <div class="row ">
            <div>
                <img class="img-fluid" src="https://mlbostoncommon.com/get/files/image/galleries/interior-deign-spacejoy-unsplash.jpg" alt="">
            </div>
            <div ><span>Article Title</span>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing?</h4>
                <small>Jane Doe</small>
            </div>
    
        </div>
    </div>
    <div class="col">
       
        <div class="row ">
            <div>
                <img class="img-fluid" src="https://mlbostoncommon.com/get/files/image/galleries/interior-deign-spacejoy-unsplash.jpg" alt="">
            </div>
            <div ><span>Article Title</span>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing?</h4>
                <small>Jane Doe</small>
            </div>
    
        </div>
    </div>
    <div class="col">
       
        <div class="row ">
            <div>
                <img class="img-fluid" src="https://mlbostoncommon.com/get/files/image/galleries/interior-deign-spacejoy-unsplash.jpg" alt="">
            </div>
            <div ><span>Article Title</span>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing?</h4>
                <small>Jane Doe</small>
            </div>
    
        </div>
    </div>
  </div>
</div>
</div>
@endsection