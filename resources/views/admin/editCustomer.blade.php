@extends('layouts.adminmasterdashboard')

@section('title') Editting  {{$customer->name}}  @endsection

@section('content')
<div class="form-three widget-shadow">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 style="font-size: 18px;" class="panel-title"> Editting  {{$customer->name}} </h3>
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
    <form action="{{ route('adminEditCustomer', $customer->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="card-body">

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">Name</label>
                    <input name="name" value="{{ $customer->name }}"  id="normal-input" class="form-control"  placeholder=" Customer Name">
                    </div>
                </div>
            </div>

            <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="normal-input" class="form-control-label">Email</label>
                        <input name="email" type="email" value="{{ $customer->email }}"  id="normal-input" class="form-control"  placeholder=" Customer Email">
                        </div>
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="normal-input" class="form-control-label">Phone</label>
                        <input name="phone" value="{{ $customer->phone }}"  id="normal-input" class="form-control"  placeholder=" Customer Phone">
                        </div>
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="normal-input" class="form-control-label">Address</label>
                        <input name="address" value="{{ $customer->address }}"  id="normal-input" class="form-control"  placeholder=" Customer Address">
                        </div>
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="normal-input" class="form-control-label">Job</label>
                        <input name="job" value="{{ $customer->job }}"  id="normal-input" class="form-control"  placeholder=" Customer Job">
                        </div>
                    </div>
            </div>
              
                  
            <button class="btn btn-success" type="submit"> Update Customer </button>
        </div>
    </form>
</div>
@endsection