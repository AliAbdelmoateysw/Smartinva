<div class="sticky-header header-section ">
    <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <div class="profile_details_left"><!--notifications of menu start -->
            <ul class="nofitications-dropdown">
              <!-- Messages -->
              <!-- Notification -->
              <!-- Progress -->
            </ul>
            <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="clearfix"> </div>
    </div>
    <div class="header-right">
    
        <div class="profile_details">		
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">	
                        <span class="prfil-img"><img src="{{asset('assets/images/2.jpg')}}" alt=""> </span> 
                            <div class="user-name">
                                <p>{{ Auth::user()->name }}</p>
                             <!-- Change the role name later -->
                               <!-- <span>Administrator</span> -->
                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>	
                        </div>	
                    </a>
                    <ul class="dropdown-menu drp-mnu">
               <!-- more in the text file -->
                        <li> <a href=" {{route('userProfile')}}"><i class="fa fa-suitcase"></i> Profile</a> </li> 
                        
                        <form  method="POST" id = 'logout-form'action=" {{route('logout')}} "> @csrf </form>
                        <li>   <a href="#" onclick="document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"> 
                        </i> Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>				
    </div>
    <div class="clearfix"> </div>	
</div>
