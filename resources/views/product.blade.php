@extends('product-layout')
@section('menu')
    @include('includs/menu')
@endsection
@section('content')
   <!-- Slider Area -->
   <section class="hero-slider">
       <!-- Single Slider -->
       <div class="container-fluid">
       <div class="single-slider">
              <div class="row">
                     <!-- Single Banner  -->
                     <div class="col-lg-4 col-md-6 col-12">
                            <h1>{{$product-> product_name}}</h1> 
                            <p>{{$product-> product_desc}}</p> 
                     </div>
              </div>  
              </div>
       </div>
       <!--/ End Single Slider -->
   </section>
   <!--/ End Slider Area -->

   <a href ="/">Go To Home</a>  
    
@endsection