@extends('layouts.usermasterdashboard')

@section('title') User Products @endsection
@section('content')
<div class="form-three widget-shadow">
  <div class="panel panel-primary">
    <div class="panel-heading ">
        <h3 style="font-size: 18px;" class="panel-title "> User Products </h3>
      <!--============================================search============================================--> 

      <div class="rad_search">
      <input type="radio" class="rsearch" name="type" value="name" style="margin-left: 25%;" onclick="searchByN()$('.browse').hide(1000);">Name
      <input type="radio" class="rsearch" name="type" value="description" onclick="searchByD();$('.browse').hide(1000);">Description
      <input type="radio" class="rsearch" name="type" value="image" onclick="searchByI();$('.browse').show(1000);">Image
      </div>

      <div class="container" style="margin-top:5%;">

      <input id="search" type="text" placeholder="Search...">
      <div class="search"></div>


      <input type="file" name="searchImage" id="normal-input" class="browse" placeholder=" Product Title" style="display : none;" onchange="searchByI()">

      </div>

      <!--==========================================end search==========================================-->
        <a  href="{{ route('userNewProduct') }}" class="btn btn-success" style="margin-left: 88%; margin-top: -5%;" > New Product</a>
    </div>  
  </div>


  <div class="table table-responsive">

    <table class="table table-striped" id="myTable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Thumbnail</th>
          <th>Title</th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>  
          <td>{{ $product->id }}</td>
          <td><img src="{{ asset($product->thumbnail) }}" width="100" ></td>
          <td class="text-nowrap"> {{ $product->title }}</td>
          <td>{{ $product->description }}</td>
        
          <td>{{ $product->price }} $</td>
          <td>{{ $product->quantity }} </td>

          <td>
          <a href="{{ route('userEditProduct', $product->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
          <form style="display: none;" id="deleteProduct-{{ $product->id }}" action="{{route('userDeleteProduct', $product->id )}}" method="POST">@csrf</form>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteProductModel-{{ $product->id }}" >X</button>
          </td>
        </tr>              
        @endforeach
      </tbody>
    </table> 
  </div>
</div>




@foreach ($products as $product)
    
<!-- Modal -->
<div class="modal fade" id="deleteProductModel-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">You are about to delete {{ $product->title }}.</h4>
        </div>
        <div class="modal-body">
          Are you sure?
        </div>
        <div class="modal-footer">
          <button type="button" style="margin:5px;" class="btn btn-default" data-dismiss="modal">No, Keep it</button>
          <form  id="deleteProduct-{{ $product->id }}" action="{{route('userDeleteProduct', $product->id )}}" method="POST">@csrf
          <button type="submit" class="btn btn-primary">Yes, Delete it</button>
        </form>
        </div>
      </div>
    </div>
  </div>

@endforeach

@endsection