@extends('layouts.usermasterdashboard')

@section('title') User Customers @endsection

@section('content')
<div class="form-three widget-shadow">
    <div class="panel panel-primary">
      <div class="panel-heading ">
          <h3 style="font-size: 18px;" class="panel-title "> User Customer </h3>
          <!--============================================search============================================--> 
          <div class="container">
            <input id="search" type="text" placeholder="Search..." onkeyup="myFunction()">
            <div class="search"></div>
          </div>
          <!--==========================================end search==========================================-->
  
          <a  href="{{ route('userNewCustomer') }}" class="btn btn-success"  style="margin-left: 74%; margin-top: -10px;" > New Customer</a>
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
            <th>Job</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customers as $customer)
          <tr>  
            <td>{{ $customer->id }}</td>
            <td class="text-nowrap"> {{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->address }} </td>
            <td>{{ $customer->job }} </td>
            <td>
            <a href="{{ route('userEditCustomer', $customer->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
            <form style="display: none;" id="deleteCustomer-{{ $customer->id }}" action="{{route('userDeleteCustomer', $customer->id )}}" method="POST">@csrf</form>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteCustomerModel-{{ $customer->id }}" >X</button>
            </td>
          </tr>              
          @endforeach
        </tbody>
      </table> 
    </div>
  </div>
  
  
  
  
  @foreach ($customers as $customer)
      
  <!-- Modal -->
  <div class="modal fade" id="deleteCustomerModel-{{ $customer->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">You are about to delete {{ $customer->name }}.</h4>
          </div>
          <div class="modal-body">
            Are you sure?
          </div>
          <div class="modal-footer">
            <button type="button" style="margin:5px;" class="btn btn-default" data-dismiss="modal">No, Keep it</button>
            <form  id="deleteCustomer-{{ $customer->id }}" action="{{route('userDeleteCustomer', $customer->id )}}" method="POST">@csrf
            <button type="submit" class="btn btn-primary">Yes, Delete it</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  
  @endforeach
@endsection