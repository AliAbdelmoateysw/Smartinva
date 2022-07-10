@extends('layouts.adminmasterdashboard')

@section('title') Editting  {{$product->title}}  @endsection

@section('content')
<div class="form-three widget-shadow">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 style="font-size: 18px;" class="panel-title"> Editting  {{$product->title}}</h3>
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
    <form action="{{ route('adminEditProduct', $product->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="card-body">

                <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="normal-input" class="form-control-label">Thumbnail</label>
                                <input type="file" name="thumbnail" id="normal-input" class="form-control" placeholder=" Product Title">
                            </div>
                            <img src="{{ asset($product->thumbnail) }}" width="100" alt="">

                        </div>
                </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="normal-input" class="form-control-label">Title</label>
                    <input name="title" value="{{ $product->title }}"  id="normal-input" class="form-control"  placeholder=" Product Title">
                    </div>
                </div>
            </div>
   
                <div class="row mt-4" >
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="placeholder-input" class="form-control-label">Description</label>
                            <textarea name="description" cols="30"  id="" class="form-control" placeholder="Product Description" rows="10" >{{ $product->description }} </textarea>
                        </div>
                    </div>
                </div>

              
                <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="normal-input" class="form-control-label">Price</label>
                                <input value="{{ $product->price }}" name="price" id="normal-input" class="form-control" placeholder=" 10.00">
                            </div>
                        </div>
                </div> 
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="normal-input" class="form-control-label">Quantity</label>
                            <input value="{{ $product->quantity }}" name="quantity" id="normal-input" class="form-control" placeholder=" 10">
                        </div>
                    </div>
            </div>     
            <button class="btn btn-success" type="submit"> Update Product </button>
        </div>
    </form>
</div>
@endsection