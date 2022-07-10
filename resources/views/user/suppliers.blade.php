@extends('layouts.usermasterdashboard')

@section('title') User Suppliers @endsection

@section('content')
<div class="form-three widget-shadow">
  <div class="panel panel-primary">
    <div class="panel-heading ">
        <h3 style="font-size: 18px;" class="panel-title "> User Suppliers </h3>
          <!--============================================search============================================--> 
          <div class="container">
            <input id="search" type="text" placeholder="Search..." onkeyup="myFunction()">
            <div class="search"></div>
          </div>
          <!--==========================================end search==========================================-->
        <a  href="{{ route('userNewSupplier') }}" class="btn btn-success" style="margin-left: 74%; margin-top: -10px;" > New Supplier</a>
    </div>  
  </div>


  <div class="table table-responsive">

    <table class="table table-striped" id="myTable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($suppliers as $supplier)
        <tr>  
          <td>{{ $supplier->id }}</td>
          <td class="text-nowrap"> {{ $supplier->name }}</td>
          <td>{{ $supplier->email }}</td>
          <td>{{ $supplier->phone }}</td>
          <td>{{ $supplier->address }} </td>
          <td>
          <a href="{{ route('userEditSupplier', $supplier->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
          <form style="display: none;" id="deleteSupplier-{{ $supplier->id }}" action="{{route('userDeleteSupplier', $supplier->id )}}" method="POST">@csrf</form>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteSupplierModel-{{ $supplier->id }}" >X</button>
          </td>
        </tr>              
        @endforeach
      </tbody>
    </table> 
  </div>
</div>




@foreach ($suppliers as $supplier)
    
<!-- Modal -->
<div class="modal fade" id="deleteSupplierModel-{{ $supplier->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">You are about to delete {{ $supplier->name }}.</h4>
        </div>
        <div class="modal-body">
          Are you sure?
        </div>
        <div class="modal-footer">
          <button type="button" style="margin:5px;" class="btn btn-default" data-dismiss="modal">No, Keep it</button>
          <form  id="deleteSupplier-{{ $supplier->id }}" action="{{route('userDeleteSupplier', $supplier->id )}}" method="POST">@csrf
          <button type="submit" class="btn btn-primary">Yes, Delete it</button>
        </form>
        </div>
      </div>
    </div>
  </div>

@endforeach

@endsection