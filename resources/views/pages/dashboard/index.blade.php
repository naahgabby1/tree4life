@extends('layouts.main.index')
@push('headmain')
<div class="row mb-2 mb-xl-3">
<div class="col-auto d-none d-sm-block">
<h3>Dashboard</h3>
</div>
<div class="col-auto ms-auto text-end mt-n1">
<a href="#" class="btn btn-light bg-white me-2">Afforestation Chanpions</a>
<a href="#" class="btn btn-primary">Tree 4 Life</a>
</div>
</div>
@endpush

@section('content')
<div class="row">
<div class="col-xl-6 col-xxl-5 d-flex">
<div class="w-100">
<div class="row">
<div class="col-sm-6">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col mt-0">
<h5 class="card-title">Champions</h5>
</div>

<div class="col-auto">
<div class="stat text-primary">
<i class="align-middle" data-feather="truck"></i>
</div>
</div>
</div>
<h1 class="mt-1 mb-3">2000</h1>
<div class="mb-0">
<span class="badge badge-primary-light">100%</span>
<span class="text-muted">Registered Champions</span>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col mt-0">
<h5 class="card-title">System Users</h5>
</div>

<div class="col-auto">
<div class="stat text-primary">
<i class="align-middle" data-feather="users"></i>
</div>
</div>
</div>
<h1 class="mt-1 mb-3">112</h1>
<div class="mb-0">
<span class="badge badge-success-light">25%</span>
<span class="text-muted">Total Users</span>
</div>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col mt-0">
<h5 class="card-title">Planting Target</h5>
</div>

<div class="col-auto">
<div class="stat text-primary">
<i class="align-middle" data-feather="dollar-sign"></i>
</div>
</div>
</div>
<h1 class="mt-1 mb-3">3,000,00</h1>
<div class="mb-0">
<span class="badge badge-success-light">95%</span>
<span class="text-muted">Total Planted</span>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col mt-0">
<h5 class="card-title">Total Payments</h5>
</div>

<div class="col-auto">
<div class="stat text-primary">
<i class="align-middle" data-feather="shopping-cart"></i>
</div>
</div>
</div>
<h1 class="mt-1 mb-3">6,344,200</h1>
<div class="mb-0">
<span class="badge badge-danger-light">25%</span>
<span class="text-muted">Monies Paid</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-6 col-xxl-7">
<div class="card flex-fill w-100">
<div class="card-header">
<div class="float-end">
<form class="row g-2">
<div class="col-auto">
<select class="form-select form-select-sm bg-light border-0">
<option>Jan</option>
<option value="1">Feb</option>
<option value="2">Mar</option>
<option value="3">Apr</option>
</select>
</div>
<div class="col-auto">
<input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;" placeholder="Search..">
</div>
</form>
</div>
<h5 class="card-title mb-0">Recent Movement</h5>
</div>
<div class="card-body pt-2 pb-3">
<div class="chart chart-sm">
<canvas id="chartjs-dashboard-line"></canvas>
</div>
</div>
</div>
</div>
</div>
@endsection
