@extends('layouts.adminmasterdashboard')

@section('title') Admin Profile @endsection

@section('content')
<div class="form-three widget-shadow">
<!-- class for theme -->
    <div class="signup-page">
           <h5>Account Settings :</h5>

            @if (session('error'))
                <div  class="alert alert-danger" role="alert"  >
                    {{ session('error') }}
                </div>
                
            @endif

            @if (session('success'))
            <div  class="alert alert-success" role="alert"  >
                {{ session('success') }}
            </div>
            
        @endif


            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>   
                        @endforeach
                    </ul>    
                </div>
                
            @endif

        <form action="{{ route('adminProfilePost')}}" method="POST">
                @csrf
                <div class="sign-u">
                <input type="text" name="name" placeholder="Name" value="{{ Auth::user()->name }}" required="">
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <input type="email" name="email" placeholder="Email Address" value="{{ Auth::user()->email }}" required="">
                    <div class="clearfix"> </div>
                </div>
                   <!-- Gender for the new step
                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4>Gender* :</h4>
                            </div>
                            <div class="sign-up2">
                                <label>
                                    <input type="radio" name="Gender" required="">
                                    Male
                                </label>
                                <label>
                                    <input type="radio" name="Gender" required="">
                                    Female
                                </label>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    -->
                <div class="sign-u">
                    <!-- zwd required f el tag  required="" -->
                    <input type="password" name="password"placeholder="Current Password">
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                    <input type="password" name="new_password" placeholder="New Password" >
                    <div class="clearfix"> </div>
                </div>
                <div class="sign-u">
                   <input type="password" name="new_password_confirmation" placeholder="Confirm Password" >
                </div>
                <div class="clearfix"> </div>
                    <div class="sub_home">
                        <input type="submit" value="Save Changes">
                    <div class="clearfix"> </div>
                </div>
             </form>

    </div>
            

</div>

@endsection