@extends('layouts.auth.index')

@section('content')
<main class="d-flex w-100 h-100">
<div class="container d-flex flex-column">
<div class="row vh-100">
<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
<div class="d-table-cell align-middle">
<div class="text-center mt-4">
<h1 class="h2">Welcome</h1>
<p class="lead">
Sign in to your Tree 4 Life account
</p>
</div>
<div class="card">
<div class="card-body">
<div class="m-sm-3">
<div class="d-grid gap-2 mb-3">
<center>
<div class="col-12">
<img src="{{asset('app_assets/assets/t4l/logo.jpg')}}" class="img-fluid" style="width: 100%; height: 100%">
</div>
</center>
</div>
<div class="row">
<div class="col">
<hr>
</div>
<div class="col-auto text-uppercase d-flex align-items-center">Login</div>
<div class="col">
<hr>
</div>
</div>
<form method="POST" action="{{ route('login.authentication.submit') }}">
@csrf
@method('POST')
<div class="mb-3">
<label class="form-label">Username</label>
<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your username" required>
</div>
<div class="mb-3">
<label class="form-label">Password</label>
<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" required>
<small>
{{-- <a href='pages-reset-password.html'>Forgot password?</a> --}}
</small>
</div>
<div>
<div class="form-check align-items-center">
<input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" checked>
<label class="form-check-label text-small" for="customControlInline">Remember me</label>
</div>
</div>
<div class="d-grid gap-2 mt-3">
<button type="submit" class="btn btn-lg btn-success">Sign in</button>
</div>
</form>
</div>
</div>
</div>
<div class="text-center mb-3">
{{-- Don't have an account? <a href='pages-sign-up.html'>Sign up</a> --}}
All rights reserved <a href='#'>ICT Directorate</a>
</div>
</div>
</div>
</div>
</div>
</main>
<script src="{{asset('app_assets/assets/js/app.js')}}"></script>
@endsection
