<!DOCTYPE HTML>
<html>
<head>
<title>Smartinva</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!--herer the deleted-->
<!-- Bootstrap Core CSS -->
<!-- <link href="{{asset('assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' /> -->

<!-- Custom CSS -->
<link href="{{asset('assets/css/style.css')}}" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 
 <!-- js-->
<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.custom.js')}}"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
<!--//Metis Menu -->
<style>
    .login-body{margin: 0px 55px 50px 0px;} 
</style>
</head> 
<body >
<div class="main-content">
    		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
                        

                            <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"   placeholder="Enter Your Email" required="" >
                                            @if($errors->has('email'))
                                                <span class="invalid-feedback" >
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                
                                <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} " placeholder="Password" required="" >
                                @if($errors->has('password'))
                                        <span class="invalid-feedback" >
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif      

                                
                                <div class="forgot-grid">
                                    <label class="checkbox">
                                    <input type="checkbox" name="checkbox" checked="" id="login"  name="remember"  {{ old('remember') ? 'checked' : '' }} ><i></i>Remember me</label>
                                  <!-- Forgot Password
                                    <div class="forgot">
                                        <a href="{{ route('password.request') }}" class="btn btn-link">Forgot password?</a>
                                    </div>
                                -->  
                                    <div class="clearfix"> </div>
                                </div>
                                <input type="submit" style="margin: 40px 0px 0px 32.5%;" name="Sign In" value="Sign In">
                               <!-- Don't have an Account
                                <div class="registration">
                                    Don't have an account ?
                                    <a class="" href="signup.html">
                                        Create an account
                                    </a>
                                </div>
                                -->
						    </form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="{{asset('assets/js/bootstrap.js')}}"> </script>
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>
