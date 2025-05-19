@extends('layouts.main.index')
@php
use Illuminate\Support\Facades\Auth;
@endphp
@push('headmain')


@endpush


@section('content')

<div class="row">
<div class="col-md-3 col-xl-2">

<div class="card">
<div class="card-header">
<h5 class="card-title mb-0">Profile Settings</h5>
</div>

<div class="list-group list-group-flush" role="tablist">
<a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account" role="tab">
Account
</a>
<a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password" role="tab">
Password
</a>
<a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#additionaldata" role="tab">
Privacy and safety
</a>
{{-- <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
Email notifications
</a> --}}
{{-- <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
Web notifications
</a> --}}
{{-- <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
Widgets
</a> --}}
{{-- <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
Your data
</a> --}}
{{-- <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
Delete account
</a> --}}
</div>
</div>
</div>

<div class="col-md-9 col-xl-10">
<div class="tab-content">
<div class="tab-pane fade show active" id="account" role="tabpanel">

<div class="card">
<div class="card-header">

<h5 class="card-title mb-0">Public info</h5>
</div>
<div class="card-body">
<form>
<div class="row">
<div class="col-md-8">
<div class="mb-3">
<label class="form-label" for="inputUsername">Username</label>
<input type="text" class="form-control"
value="{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->name : '' }}" readonly>
</div>
</div>
</div>

<div class="row">
<div class="col-md-4">
<div class="mb-3">
<label class="form-label" for="inputUsername">Division</label>
<input type="text" class="form-control" readonly
value="{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->division_name : '' }}">
</div>
</div>

<div class="col-md-4">
<div class="mb-3">
<label class="form-label" for="inputUsername">Station</label>
<input type="text" class="form-control" readonly
value="{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->station_name : '' }}">
</div>
</div>
<div class="col-md-4">
<div class="text-center">
<img alt="Charles Hall" src="{{asset('app_assets/assets/t4l/user.png')}}" class="rounded-circle img-responsive mt-2" width="128" height="128" style="border: 2px solid green">
<div class="mt-2">
<span class="btn btn-primary"><i class="fas fa-upload"></i> Upload</span>
</div>
<small>For best results, use an image at least 128px by 128px in .jpg format</small>
</div>
</div>
</div>
<button disabled class="btn btn-primary">Save changes</button>
</form>
</div>
</div>

<div class="card">
<div class="card-header">
<h5 class="card-title mb-0">Private info</h5>
</div>
<div class="card-body">
<form>
<div class="row">
<div class="mb-3 col-md-4">
<label class="form-label" for="inputFirstName">First Name</label>
<input type="text" class="form-control" readonly
value="{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->firstname : '' }}">
</div>
<div class="mb-3 col-md-4">
<label class="form-label" for="inputLastName">Surname</label>
<input type="text" class="form-control" readonly
value="{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->surname : '' }}">
</div>
<div class="mb-3 col-md-4">
<label class="form-label" for="inputLastName">Othernames</label>
<input type="text" class="form-control" readonly
value="{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->othername : '' }}">
</div>
</div>
<div class="mb-3">
<label class="form-label" for="inputEmail4">You Are Setup As</label>
<input type="text" class="form-control text-uppercase" readonly
value="{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->user_role : '' }}">
</div>


<div class="row">
<div class="mb-3 col-md-4">
<label class="form-label" for="inputFirstName">Region</label>
<input type="text" class="form-control" readonly
value="{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->region_name : '' }}">
</div>
<div class="mb-3 col-md-4">
<label class="form-label" for="inputLastName">Department</label>
<input type="text" class="form-control" readonly
value="{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->department_name : '' }}">
</div>
<div class="mb-3 col-md-4">
<label class="form-label" for="inputLastName">Unit</label>
<input type="text" class="form-control" readonly
value="{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->unit_name : '' }}">
</div>
</div>
<button disabled class="btn btn-primary">Save changes</button>
</form>

</div>
</div>

</div>



<div class="tab-pane fade" id="additionaldata" role="tabpanel">
<div class="card">
<div class="card-header">

<h5 class="card-title mb-0">System Issues Reporting ICT Officers</h5>
</div>
<div class="card-body h-100">
<div class="d-flex align-items-start">
<img src="{{asset('app_assets/assets/t4l/user.png')}}" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
<div class="flex-grow-1">
{{-- <small class="float-end text-navy">3h ago</small> --}}
<strong>Gabriel Duon-Naah</strong> is an ICT zonal officer with <strong>Databases & Application</strong>'s Unit<br>
<small class="text-muted">Accra HeadQuarters</small>

<div class="row g-0 mt-1">
<div class="col-6 col-md-4 col-lg-4 col-xl-3">
<img src="{{asset('app_assets/assets/t4l/user.png')}}" class="img-fluid pe-2" alt="Unsplash">
</div>
<div class="col-6 col-md-4 col-lg-4 col-xl-3">
<img src="{{asset('app_assets/assets/t4l/user.png')}}" class="img-fluid pe-2" alt="Unsplash">
</div>
</div>
</div>
</div>

<hr>
<div class="d-flex align-items-start">
<img src="{{asset('app_assets/assets/t4l/user.png')}}" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
<div class="flex-grow-1">
{{-- <small class="float-end text-navy">1d ago</small> --}}
<strong>User Password</strong> must be kept <strong>personal & secret</strong><br>
<small class="text-muted">Cyber Security tip from ICT</small>

<div class="d-flex align-items-start mt-1">
<a class="pe-3" href="#">
<img src="{{asset('app_assets/assets/t4l/user.png')}}" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
</a>
<div class="flex-grow-1">
<div class="border text-sm text-muted p-2 mt-1">
Inform the ICT directorate on any issue pertaining to your user account
</div>
</div>
</div>
</div>
</div><hr>
<div class="d-grid">
<a href="{{ route('dashboard') }}" class="btn btn-primary">Return to dashboard</a>
</div>
</div>
</div>
</div>



<div class="tab-pane fade" id="password" role="tabpanel">
<div class="card">
<div class="card-body">
<h5 class="card-title">Password</h5>

<form>
<div class="mb-3">
<label class="form-label" for="inputPasswordCurrent">Current password</label>
<input type="password" class="form-control" id="inputPasswordCurrent">
<small><a href="#">Forgot your password?</a></small>
</div>
<div class="mb-3">
<label class="form-label" for="inputPasswordNew">New password</label>
<input type="password" class="form-control" id="inputPasswordNew">
</div>
<div class="mb-3">
<label class="form-label" for="inputPasswordNew2">Verify password</label>
<input type="password" class="form-control" id="inputPasswordNew2">
</div>
<button type="submit" class="btn btn-primary">Save changes</button>
</form>

</div>
</div>
</div>
</div>
</div>
</div>

@endsection
