@extends('layouts.special')

@section('content')
<script>
  function calculate() {
    
    var product_allquantity = document.getElementById('allquantity').value;	
    var product_price = document.getElementById('priceo').value;	
    var product_quantity = document.getElementById('pquantity').value;
    var total_price = document.getElementById('totalprice');	
    var new_quantity = document.getElementById('quantity');	
    var myResult = product_price * product_quantity;
    total_price.value = myResult;  

    var finalqunatity = product_allquantity - product_quantity;
    new_quantity.value = finalqunatity;  
    }
  </script>

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body" method="post" action="{{ route('checkouto') }}">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
                <br>
              @endif

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--lastName-->
                  <div class="md-form">
                    <input type="text" id="name" class="form-control"  name="name" placeholder=" Name">
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="Adress"  name="address">
              </div>

              <!--phone-->
              <div class="md-form mb-5">
                <input type="text" id="phone" class="form-control" placeholder="Phone"  name="phone">
              </div>

              <!--email-->
              <div class="md-form mb-5">
                <input type="email" id="email" class="form-control" placeholder="Email" name="email">
              </div>

              <!--job-->
              <div class="md-form mb-5">
                <input type="text" id="job" class="form-control" placeholder="Job"  name="job">
              </div>
         
             <hr>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" name="nameoncard" required>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" name="creditcardnumber" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" name="expiration" required>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" name="cvv" required>
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">

                  <div class="col-md-6 mb-2">
                    <label for="pquantity">Product Quantity</label>
                    <input type="number" id="pquantity" class="form-control"  oninput="calculate()"  name="pquantity"  >
                  </div>
                  
                  <div class="col-md-6 mb-2">
                    <label for="totalprice">Total Price</label>
                    <input type="number" id="totalprice" class="form-control"  name="totalprice"  readonly>
                  </div>
                  <input type="hidden" id="pid" class="form-control"   name="pid" value="{{ $product->id }}" readonly>

                  <input type="hidden" id="allquantity" class="form-control" oninput="calculate()"  name="allquantity" value="{{ $product->quantity }}" >


                  <input type="hidden" id="quantity" class="form-control"  name="quantity" >

                  <input type="hidden" id="priceo" class="form-control"  oninput="calculate()" name="priceo" value="{{ $product->price }}" readonly>

              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">
   <!-- Heading -->
            <h2 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted">Your cart</span>
            </h2>
  
            <!-- Cart -->
            <ul class="list-group mb-3 z-depth-1">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h4 class="text-center"> {{ $product->title }}</h4>
                <img src="{{ asset($product->thumbnail) }}" class="card-img-top" width="200" height="300"  alt="">
                <small class="text-muted  text-center">{{$product->description}}</small>
                <h3 class="text-center"> {{ $product->price }}$</h3>
                </div>
                
              </li>
              
            </ul>
            <!-- Cart -->
      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  @endsection