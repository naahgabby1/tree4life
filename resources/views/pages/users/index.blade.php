@extends('layouts.main.index')

@push('headmain')
<div class="row mb-2 mb-xl-3">
<div class="col-auto d-none d-sm-block">
{{-- <h3><strong>Analytics</strong> Dashboard</h3> --}}
</div>
<div class="col-auto ms-auto text-end mt-n1">
<a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
<button class="btn btn-primary" type="button" data-bs-toggle="modal"data-bs-target="#modalAddUser">
New User
</button>
</div>
</div>
@endpush


@section('content')
<section>
@include('pages.modals.users.modal_users')
</section>
<div class="row">
<div class="col-sm-6 col-xl-3">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col mt-0">
<h5 class="card-title">Active users</h5>
</div>

<div class="col-auto">
<div class="stat text-primary">
<i class="align-middle" data-feather="dollar-sign"></i>
</div>
</div>
</div>
<h1 class="mt-1 mb-3">{{ $users_data->where('status', '1')->count() }}</h1>
<div class="mb-0">
<span class="badge badge-success-light">3.65%</span>
<span class="text-muted">As at now</span>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-xl-3">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col mt-0">
<h5 class="card-title">Archived Users</h5>
</div>

<div class="col-auto">
<div class="stat text-primary">
<i class="align-middle" data-feather="shopping-bag"></i>
</div>
</div>
</div>
<h1 class="mt-1 mb-3">{{ $users_data->where('status', '0')->count() }}</h1>
<div class="mb-0">
<span class="badge badge-danger-light">-5.25%</span>
<span class="text-muted">As at now</span>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-xl-3">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col mt-0">
<h5 class="card-title">Super Administrators</h5>
</div>

<div class="col-auto">
<div class="stat text-primary">
<i class="align-middle" data-feather="activity"></i>
</div>
</div>
</div>
<h1 class="mt-1 mb-3">{{ $users_data->where('role_id', '1')->count() }}</h1>
<div class="mb-0">
<span class="badge badge-success-light">4.65%</span>
<span class="text-muted">As at now</span>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-xl-3">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col mt-0">
<h5 class="card-title">Administrators</h5>
</div>

<div class="col-auto">
<div class="stat text-primary">
<i class="align-middle" data-feather="shopping-cart"></i>
</div>
</div>
</div>
<h1 class="mt-1 mb-3">{{ $users_data->where('role_id', '2')->count() }}</h1>
<div class="mb-0">
<span class="badge badge-success-light">2.35%</span>
<span class="text-muted">As at now</span>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h5 class="card-title">List Of System Users</h5>
</div>
<div class="card-body">
<table id="datatables-column-search-select-inputs" class="table table-striped" style="width:100%">
<thead>
<tr>
<th>Name</th>
<th>Acount Status</th>
<th>Role</th>
<th>Region</th>
<th>Station</th>
<th><center>Action</center></th>
</tr>
</thead>
<tbody>
@php
$nx=1;
@endphp
@foreach ($users_data as $user)
<tr>
<td>{{ $user->name }}</td>
@if ($user->reset_chex == 0)
<td class="text-success">
Active Status
</td>
@else
<td class="text-danger">
Reset Requested
</td>
@endif

<td>{{ $user->user_role }}</td>
<td>{{ $user->region_name }}</td>
<td>{{ $user->station_name }}</td>
<td>
<form action="{{ route('delete.user.submit', $user->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="button" class="btn btn-success" data-bs-toggle="modal"
data-bs-target="#modalEditUser{{$user->id}}">
<i class="fas fa-edit"></i>
</button>
<button type="button" data-idcode="{{ $user->id }}" id="passresetClicked" class="btn btn-warning">
<i class="fas fa-unlock-alt"></i>
</button>
<button type="button" id="delClicked" class="btn btn-danger">
<i class="fas fa-times"></i>
</button>
</form>
</td>
</tr>
@php
$nx++;
@endphp
@include('pages.modals.users.modal_users_edit')
@endforeach
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Satus</th>
<th>Role</th>
<th>Region</th>
<th>Station</th>
<th><center>Action</center></th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
@endsection

@push('customed_js')
<script type="text/javascript">

$.toast({
  heading: 'Success!',
  text: 'Toast is working!',
  icon: 'success',
});



$(document).ready(function(){

$(document).on('click','#delClicked',function(){
const form = this.closest('form');
_alert('This User',form);
});



$(document).on('click','#passresetClicked',function(){
var selected = $(this).data('idcode');
$.get("filtertoreset/"+ selected, function(responses){
location.reload();
}).fail(function () {
alert("Error fetching room data.");
});
});







function _alert(mheader,form){
Swal.fire({
title: `Delete `+mheader+` ?`,
text: "This action cannot be undone!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#d33',
cancelButtonColor: '#3085d6',
confirmButtonText: 'Yes, delete it!',
reverseButtons: true
}).then((result) => {
if (result.isConfirmed) {
form.submit();
}
});
}
});
</script>
@endpush
