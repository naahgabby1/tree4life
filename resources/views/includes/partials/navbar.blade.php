@php
use Illuminate\Support\Facades\Auth;
@endphp

<nav class="navbar navbar-expand navbar-light navbar-bg">
<a class="sidebar-toggle js-sidebar-toggle">
<i class="hamburger align-self-center"></i>
</a>

{{-- <form class="d-none d-sm-inline-block">
<div class="input-group input-group-navbar">
<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
<button class="btn" type="button">
<i class="align-middle" data-feather="search"></i>
</button>
</div>
</form> --}}

<ul class="navbar-nav d-none d-lg-flex">
<li class="nav-item px-2 dropdown">
<a class="nav-link" href="#" id="megaDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->station_name : '' }}
<i class="align-middle" data-feather="chevrons-right" style="color: green"></i>
Dashboard
<i class="align-middle" data-feather="chevrons-right" style="color: green"></i>
<span class="align-middle" style="padding-top: 0.5px">{{ $breadCrumbs }}</span>
</a>
</li>
</ul>




<div class="navbar-collapse collapse">
<ul class="navbar-nav navbar-align">
<li class="nav-item dropdown">
<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
<div class="position-relative">
<i class="align-middle" data-feather="bell"></i>
<span class="indicator">4</span>
</div>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
<div class="dropdown-menu-header">
{{ '2' }} Staff Online
</div>
<div class="list-group">
<a href="#" class="list-group-item">
<div class="row g-0 align-items-center">
<div class="col-2">
<i class="text-danger" data-feather="alert-circle"></i>
</div>
<div class="col-10">
<div class="text-dark">Update completed</div>
<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
<div class="text-muted small mt-1">30m ago</div>
</div>
</div>
</a>
</div>
<div class="dropdown-menu-footer">
<a href="#" class="text-muted">Show all notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown">
<a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown" style="text-decoration: none;">
<span class="align-middle" style="padding-top: 0.5px; font-size: 14px">
{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->name : '' }}
</span>
</a>

<div class="dropdown-menu dropdown-menu-end">
<a class='dropdown-item' href='{{ route('system.user.profile')}}'>
<i class="align-middle me-1" data-feather="user"></i> Profile</a>
<div class="dropdown-divider"></div>
<form method="POST" action="{{ route('logout.user.submit')}}">
@csrf
<button type="submit" class="btn btn-danger">Logout</button>
</form>
</div>
</li>
</ul>
</div>
</nav>
