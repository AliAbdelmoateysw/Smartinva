@extends('layouts.shoppingmaster')
@section('content')

	<!-- checkout page -->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Checkout
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->

			<div class="checkout-right">
				<h4>Your shopping cart contains:
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Product</th>
								<th>Quantity</th>
								<th>Product Name</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
						<!-- ======================================= -->
						@if(Session::has('cart'))
						@foreach ($products as $product)
						<tr class="rem1">	
							<td class="invert-image" style="width:600px"  >
								<a href="#">
									<img src="{{$product['item'] ['thumbnail']}}" alt=" "  width="150" height="150">
								</a>
							</td>
							<td class="invert" style="width:150px"; >
							<div >
								<span id="quantityAuto">{{ $product['qty']}}</span>
							</div>
							</td>
							<td class="invert" style="width:400px"; >{{$product['item'] ['description']}} </td>
							<td class="invert" style="width:150px"; >${{$product['price']}}</td>
						</tr>
						@endforeach
						@endif	
						<!-- ======================================= -->
						</tbody>
					</table>
				</div>
			</div>
			<br><br>
			<h3> Total: ${{ $totalPrice }} </h3>
			<br>
							<!-- ===================== Check out Purchases   =========================== -->
			<div class="checkout-left">
				<div class="address_form_agile">
					<h4>Fill The Form Below </h4>

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
		
					  <div class="creditly-wrapper wthree, w3_agileits_wrapper">
              <div class="information-wrapper">
                <div class="first-row">
                  <!-- NAME -->
                  <div class="controls">
                    <input class="billing-address-name" type="text" name="name" placeholder="Full Name" required="">
                  </div>
                  <!-- Address-->
                  <div class="w3_agileits_card_number_grids">
                    <div class="w3_agileits_card_number_grid_left">
                      <div class="controls">
                        <input type="text" id="address"  placeholder="Adress"  name="address">
                      </div>
                    </div>
                  <!--Phone-->
                  <div class="w3_agileits_card_number_grid_right">
                    <div class="controls">
                      <input type="text" id="phone"  placeholder="Phone"  name="phone">
                    </div>
                  </div>
                  <!--Email-->
                  <div class="w3_agileits_card_number_grid_right">
                    <div class="controls">
                      <input type="email" id="email"  placeholder="Email" name="email">
                    </div>
                  </div>
                  <!--Job-->
                  <div class="w3_agileits_card_number_grid_right">
                    <div class="controls">
                      <input type="text" id="job"   placeholder="Job"  name="job">
                    </div>
                  </div>
                  <div class="clear"> </div>
                  <hr>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cc-name">Name on card</label> <br>	<small class="text-muted">Full name as displayed on card</small>
                      <input type="text" class="controls"   id="cc-name" placeholder="" name="nameoncard" required>
                      <div class="invalid-feedback" hidden="true">
                        Name on card is required
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="cc-number">Credit card number</label> <br>	<small class="text-muted">Credit card number is required</small>
                      <input type="text" class="controls" id="cc-number" placeholder="" name="creditcardnumber" required>
                      <div class="invalid-feedback"  hidden="true">
                      Credit card number is required
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <label for="cc-expiration">Expiration</label>
                      <input type="text" class="controls" id="cc-expiration" placeholder="" name="expiration" required>
                      <div class="invalid-feedback" hidden="true">
                      Expiration date required
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="cc-expiration">CVV</label>
                      <input type="text" class="controls" id="cc-cvv" placeholder="" name="cvv" required>
                      <div class="invalid-feedback" hidden="true">
                      Security code required
                      </div>
                    </div>
                    </div>
                </div>
                <button class="submit check_out" type="submit" style="margin-left: 7%; margin-top: 4%; width: 86%;"> Complete Order </button>
              </div>
					  </div>
					</form>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	@endsection