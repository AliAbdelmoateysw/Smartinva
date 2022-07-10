@extends('layouts.special')
@section('content')
    
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

        <img src="{{ asset($product->thumbnail) }}" class="img-fluid" height="500" width="500" alt="">

        </div>

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">
          <p class="lead font-weight-bold">Title:</p>
           <p> {{ $product->title }}</p>
           <p class="lead font-weight-bold">Description:</p>
           <p> {{ $product->description }}</p>
           <p class="lead font-weight-bold">Price:</p>
           <p class="lead">
              <span> {{ $product->price }} $ </span>
          </p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <a href="{{ route('checkout',$product->id)}}" class="btn btn-primary"><i class="fas fa-shopping-cart my-0 p"></i> Checkout</a>
            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

     <br>
     <br>
     <br>
     <br>


    </div>
  </main>
  <!--Main layout-->

@endsection