<style> 
	.Emptylinko:hover{color: #ff5722;}
	.Emptylinko{color:black;}
</style>
<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search" style="margin-top:1.2%; ">
<!--================================= PUT ANY THING HERE ================================= -->
<a href="{{ route('cartReset') }}"  class="Emptylinko" > 	<i class="fa fa-shopping-cart" aria-hidden="true"></i> Empty Cart </a>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
									<li>
									<a href="{{ route('login') }}" >
										<span class="fa fa-unlock-alt" aria-hidden="true"></span> Log In </a>
								</li>
								<li>
									<a href="{{route('Shoppingcheckout')}}">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
									<!--============ CartInHeader=============== -->
									<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }} </span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->
	