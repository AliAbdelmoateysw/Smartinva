@extends('layouts.adminmasterdashboard')

@section('title') New Product @endsection

@section('content')
<div class="form-three widget-shadow">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 style="font-size: 18px;" class="panel-title"> New Product</h3>
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
    <form action="{{ route('adminNewProduct') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">Title</label>
                        <input name="title" id="normal-input" class="form-control" placeholder=" Product Title">
                    </div>
                </div>
            </div>
   
                <div class="row mt-4" >
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="placeholder-input" class="form-control-label">Description</label>
                            <textarea name="description" cols="30"  id="" class="form-control" placeholder="Product Description" rows="10" > </textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="normal-input" class="form-control-label">Thumbnail</label>
                                <input type="file" name="thumbnail" id="normal-input" class="form-control" placeholder=" Product Title">
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="normal-input" class="form-control-label">Price</label>
                                <input name="price" id="normal-input" class="form-control" placeholder=" 10.00">
                            </div>
                        </div>
                </div>     
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="normal-input" class="form-control-label">Quantity</label>
                            <input name="quantity" id="normal-input" class="form-control" placeholder=" 10">
                        </div>
                    </div>
            </div>   
            <button class="btn btn-success" type="submit"> Create Product </button>
        </div>
    </form>
</div>
@endsection