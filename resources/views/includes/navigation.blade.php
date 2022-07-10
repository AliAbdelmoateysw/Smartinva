<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="{{ route('welcome') }}" >
        <strong class="blue-text">Smartinva</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
 <!-- Left -->
        <ul class="navbar-nav mr-auto">
          
         
        </ul>
    
        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
         
          @if (Auth::check())
          <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link waves-effect" >
                    Dashboard
                </a>
            </li>


            <li class="nav-item">
                <form method="POST" id="logout-form" action="{{ route('logout') }}">@csrf</form>
                <a href="#" onclick="document.getElementById('logout-form').submit();" class="nav-link waves-effect" >
                        Logout
                    </a>
                </li>
          @else
          <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link waves-effect" >
                        Login</a>
            </li>
              
          @endif
         
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->