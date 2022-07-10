<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon " href="{{asset('assets/icons/promotion.png')}}">
  <meta name="keywords" content="Smartinva" />

  <title> @yield('title','Smartinva') </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
<link href="{{ asset('assets/customerside/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href=" {{ asset('assets/customerside/css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href=" {{ asset('assets/customerside/css/style.min.css') }}" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }
  #cardoo{
float: left;

  }
  </style>
</head>

<body>

  @include('includes.navigation')
  @yield('content')


 

  <!-- SCRIPTS -->
  <!-- JQuery -->
<script type="text/javascript" src="{{asset('assets/customerside/js/jquery-3.3.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('assets/customerside/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('assets/customerside/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('assets/customerside/js/mdb.min.js')}}"></script>
  <!-- Initializations -->
  <script type="{{asset('assets/customerside/text/javascript')}}">

  </script>
</body>

</html>
