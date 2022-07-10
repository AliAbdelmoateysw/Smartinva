@extends('layouts.adminmasterdashboard')

@section('title') New User @endsection

@section('content')
<div class="form-three widget-shadow">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 style="font-size: 18px;" class="panel-title"> New User</h3>
        </div>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success" > {{Session::get('success')}}</div>
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
    <form action="{{ route('adminNewUser') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="card-body">
             <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">Name</label>
                        <input name="name" id="normal-input" class="form-control" placeholder=" User Name">
                    </div>
                </div>
            </div>
   
            <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="normal-input" class="form-control-label">Email</label>
                            <input name="email" type="email" id="normal-input" class="form-control" placeholder=" User Email">
                        </div>
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="normal-input" class="form-control-label">Password</label>
                            <input name="password" type="password" id="normal-input" class="form-control" >
                        </div>
                    </div>
            </div>
            
            <div class="row">    
                    <div class="col-md-8">
                            <div class="form-group">
                                <label for="normal-input" class="form-control-label">Permissions</label>
                                <input type="radio" class="form-control" name="permission" value="user"><p style="margin: -22px 0px -15px 0px; width: 0px;">User</p><br>
                                <input type="radio" class="form-control" name="permission" value="admin"><p style="margin: -22px 0px -15px 0px; width: 0px;">Admin</p>
                            </div>
                    </div>
            </div>
       
        <button class="btn btn-success" type="submit"> Create User </button>
        </div>
    </form>
</div>
@endsection