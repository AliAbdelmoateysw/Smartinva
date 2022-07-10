@extends('layouts.adminmasterdashboard')

@section('title') New Supplier @endsection

@section('content')
<div class="form-three widget-shadow">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 style="font-size: 18px;" class="panel-title"> New Supplier</h3>
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
    <form action="{{ route('adminNewSupplier') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">Name</label>
                        <input name="name" id="normal-input" class="form-control" placeholder=" Supplier Name">
                    </div>
                </div>
            </div>
   
            <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="normal-input" class="form-control-label">Email</label>
                            <input name="email" type="email" id="normal-input" class="form-control" placeholder=" Supplier Email">
                        </div>
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="normal-input" class="form-control-label">Phone</label>
                            <input name="phone" id="normal-input" class="form-control" placeholder=" Supplier Phone">
                        </div>
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="normal-input" class="form-control-label">Address</label>
                            <input name="address"  id="normal-input" class="form-control" placeholder=" Supplier Address">
                        </div>
                    </div>
            </div>
        <button class="btn btn-success" type="submit"> Create Supplier </button>
        </div>
    </form>
</div>
@endsection