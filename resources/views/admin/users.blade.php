@extends('layouts.adminmasterdashboard')

@section('title') Admin Users @endsection

@section('content')
<div class="form-three widget-shadow">
    <div class="panel panel-primary">
        <div class="panel-heading ">
            <h3 style="font-size: 18px;" class="panel-title "> Users </h3>
            <!--============================================search============================================--> 
            <div class="container" style="margin-top:8%;">
              <input id="search" type="text" placeholder="Search..." onkeyup="myFunction()">
              <div class="search"></div>
            </div>


            <!--==========================================end search==========================================-->
            <a  href="{{ route('adminNewUser') }}" class="btn btn-success" style="margin-left: 90%; margin-top: -4.5%;"  > New User</a>
        </div>  
    </div>
  <div class="table table-responsive">

    <table class="table table-striped" id="myTable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Created at</th>
          <th>Updated at</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>  
          <td>{{ $user->id }}</td>
          <td class="text-nowrap">{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
          <td>{{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans() }}</td>

          <td>
          <a href="{{ route('adminEditUser', $user->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
          <form style="display: none;" id="deleteUser-{{ $user->id }}" action="{{route('adminDeleteUser', $user->id )}}" method="POST">@csrf</form>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteUserModel-{{ $user->id }}" >X</button>
          </td>
        </tr>              
        @endforeach
      </tbody>
    </table> 
  </div>
</div>

@foreach ($users as $user)
    
<!-- Modal -->
<div class="modal fade" id="deleteUserModel-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">You are about to delete {{ $user->name }}.</h4>
        </div>
        <div class="modal-body">
          Are you sure?
        </div>
        <div class="modal-footer">
          <button type="button" style="margin:5px;" class="btn btn-default" data-dismiss="modal">No, Keep it</button>
          <form  id="deleteUser-{{ $user->id }}" action="{{route('adminDeleteUser', $user->id )}}" method="POST">@csrf
          <button type="submit" class="btn btn-primary">Yes, Delete it</button>
        </form>
        </div>
      </div>
    </div>
  </div>

@endforeach


@endsection