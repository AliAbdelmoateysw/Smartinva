@extends('layouts.adminmasterdashboard')

@section('title') Admin Purchases @endsection
@section('content')
<div class="form-three widget-shadow">
  <div class="panel panel-primary">
    <div class="panel-heading ">
        <h3 style="font-size: 18px;" class="panel-title "> Admin Purchases </h3>
    </div>  
  </div>


  <div class="table table-responsive">

    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Job</th>
          <th>Name On Card</th>
          <th>Credit Card Number</th>
          <th>Expiration</th>
          <th>Card Verification Value</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Total Price</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($purchases as $purchase)
        <tr>  
          <td>{{ $purchase->id }}</td>
          <td>{{ $purchase->name }}</td>
          <td class="text-nowrap"> {{ $purchase->address }}</td>
          <td>{{ $purchase->phone }}</td>
          <td>{{ $purchase->email }} </td>
          <td>{{ $purchase->job }} </td>
          <td>{{ $purchase->nameoncard }} </td>
          <td>{{ $purchase->creditcardnumber }} </td>
          <td>{{ $purchase->expiration }} </td>
          <td>{{ $purchase->cvv }} </td>
          <td>{{ $purchase->description }} </td>
          <td>{{ $purchase->pquantity }} </td>
          <td>{{ $purchase->totalprice }} $</td>

        </tr>              
        @endforeach
      </tbody>
    </table> 
  </div>
</div>

@endsection