<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> @yield('title','Smartinva') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon " href="{{asset('assets/icons/promotion.png')}}">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Smartinva" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	

<!--===================== Custom Style ===================== -->
<style>
/*================= New Model Added =================*/
.input-custom{
    width: 50%;
    display: block;
    margin: 15px auto;
}
.close-custom{
    position: absolute;
    top: 0;
    right: 14px;
    font-size:  42px; 
    transform: rotate(45deg);
    cursor: pointer;
}

.bg-modal{
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    position: absolute;
    top: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    display: none ;
}

.modal-contento{
    width: 500px;
    height: 300px;
    background-color: white ;
    border-radius: 4px;
    text-align: center ;
    padding: 20px;
    position: relative;

}

/*================= End of Model ================= */
</style>

<!--===================== Custom Style ===================== -->



	<!--//tags -->
	<link href="{{ asset('assets/Shopping_Side/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('assets/Shopping_Side/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('assets/Shopping_Side/css/font-awesome.css')}}" rel="stylesheet">
	<!--pop-up-box-->
	<link href="{{ asset('assets/Shopping_Side/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/Shopping_Side/css/jquery-ui1.css')}}">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- top-header -->
	
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile" style="margin-left: 32%;">
				<h1>
					<a href="{{route('welcome')}}">
						<span>S</span>martinva
						<span>S</span>hop
						<img src="{{ asset('assets/Shopping_Side/images/logo2.png')}}" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
			
				<!-- //cart details -->		
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //header-bot -->


	<!--header Navigation -->
	@include('includes.Shopping.headerNavigation')


	<!-- top Products -->
		
		<div class="container">

		@yield('content')
	
	<!-- footer -->
	<footer>
		<div class="container">
		<hr>
		
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
				<!-- quick links -->
				<div class="col-sm-5 address-right">
					
					<div class="col-xs-6 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> Helwan University, Egypt.</li>
							<li>
								<i class="fa fa-mobile"></i> 01117666354 </li>
							<li>
								<i class="fa fa-phone"></i> 01117666354 </li>
							
						</ul>
					</div>
				</div>
				<!-- //quick links -->
					<img src="{{asset('assets/icons/Logo.png')}}" style="width: 25%;margin-left: -4%;">
				<!-- social icons -->
				<div class="col-sm-2 footer-grids  w3l-socialmk" style="margin-left: 16%;float: right;height: 180px;">
					<h3>Follow Us on</h3>
					<div class="social"style="margin-top: 33%;margin-left: 3%;">
						<ul>
							<li>
								<a class="icon fb" href="{{asset('https://www.facebook.com')}}" target="_blank">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href= "{{asset('https://twitter.com/?lang=en')}}" target="_blank"  >
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="{{asset('https://mail.google.com')}}" target="_blank">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
					
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>


		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right" >
		<div class="container">
			<p>© 2019 Smartinva Shop. All rights reserved | Develop by
				<a href="#"> 4A</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="{{ asset('assets/Shopping_Side/js/jquery-2.1.4.min.js')}}"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="{{ asset('assets/Shopping_Side/js/jquery.magnific-popup.js')}}"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="{{ asset('assets/Shopping_Side/js/minicart.js')}}"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="{{ asset('assets/Shopping_Side/js/jquery-ui.js')}}"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- flexisel (for special offers) -->
	<script src="{{ asset('assets/Shopping_Side/js/jquery.flexisel.js')}}"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="{{ asset('assets/Shopping_Side/js/SmoothScroll.min.js')}}"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="{{ asset('assets/Shopping_Side/js/move-top.js')}}"></script>
	<script src="{{ asset('assets/Shopping_Side/js/easing.js')}}"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- for bootstrap working -->
<script src="{{ asset('assets/Shopping_Side/js/bootstrap.js')}}"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


</body>

</html>