@extends('layouts.special')
@section('content')
    

 <br><br><br><br>
  <!--Main layout-->
  <main>
    <div class="container">

   @foreach ($products as $product)
     <!--Card-->
            <div id="cardoo" class="card col-lg-3 col-md-6 mb-4">

              <!--Card image-->
              <div class="view overlay">
              <img src="{{ asset($product->thumbnail) }}" class="card-img-top" width="200" height="300"  alt="">
                <a
              href="{{ route('singleProduct',$product->id) }}">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="{{ route('singleProduct',$product->id) }}" class="grey-text">
                  <h5>{{ $product->title }}</h5>
                </a>
                <h5>
                  <strong>
                    <a href="{{ route('singleProduct',$product->id) }}" class="dark-grey-text"> {{ $product->description }}
                    </a>
                  </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                  <strong>{{ $product->price }}$</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->
    
<!--Section: Products v.3-->
        @endforeach
  
    </div>

  </main>
  <!--Main layout-->
@endsection