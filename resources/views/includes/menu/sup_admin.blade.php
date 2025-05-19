<nav id="sidebar" class="sidebar js-sidebar">
 <div class="sidebar-content js-simplebar">
<a class='sidebar-brand' href='{{ route('dashboard') }}' style="background: white;color: green">
<span class="sidebar-brand-text align-middle">
<h4 style="color: green">FORESTRY COMMISSION</h4>
{{-- <img src="{{asset('app_assets/assets/t4l/logo.png')}}" class="img-fluid" style="width: 120%; height: 120%"> --}}
</span>
<svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewbox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
<path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
<path d="M20 12L12 16L4 12"></path>
<path d="M20 16L12 20L4 16"></path>
</svg>
</a>

<div class="sidebar-user">
<div class="d-flex justify-content-center">
<div class="flex-grow-1 ps-2">
<a class="sidebar-user-title" href="#">
{{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->name : '' }}
</a>
<div class="sidebar-user-subtitle">
As : {{ Auth::guard('loginguard')->check() ? Auth::guard('loginguard')->user()->user_role : '' }}
</div>
</div>
</div>
</div>

<ul class="sidebar-nav">
<li class="sidebar-item active">
<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">DASHBOARDS</span>
</a>
<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
<li class="sidebar-item">
<a class='sidebar-link' href='#'>T4L - Dashboard</a></li>
<li class="sidebar-item"><a class='sidebar-link' href='#'>YFC - Dashboard</a></li>
</ul>
</li>


<li class="sidebar-header">
Afforestation Champions
</li>
<li class="sidebar-item">
<a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
<i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Registration</span>
</a>
<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
<li class="sidebar-item"><a class='sidebar-link' href='#'>List <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
<li class="sidebar-item"><a class='sidebar-link' href='#'>Archived List</a></li>
</ul>
</li>

<li class="sidebar-item">
<a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
<i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Timesheets</span>
</a>
<ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
<li class="sidebar-item"><a class='sidebar-link' href='#'>Activate <span class="sidebar-badge badge bg-primary">ICT</span></a></li>
<li class="sidebar-item"><a class='sidebar-link' href='#'>Lock TimeSheet <span class="sidebar-badge badge bg-primary">Audit</span></a></li>
<li class="sidebar-item"><a class='sidebar-link' href='#'>Verify TimeSheet <span class="sidebar-badge badge bg-primary">Finance</span></a></li>
<li class="sidebar-item"><a class='sidebar-link' href='#'>Approve TimeSheet <span class="sidebar-badge badge bg-primary">ICT</span></a></li>
<li class="sidebar-item"><a class='sidebar-link' href='#'>Old TimeSheets <span class="sidebar-badge badge bg-primary">ICT</span></a></li>
<li class="sidebar-item"><a class='sidebar-link' href='#'>Fill TimeSheet <span class="sidebar-badge badge bg-primary">ICT</span></a></li>
</ul>
</li>

<li class="sidebar-item">
<a data-bs-target="#comments" data-bs-toggle="collapse" class="sidebar-link collapsed">
<i class="align-middle" data-feather="list"></i> <span class="align-middle">Comments</span>
</a>
<ul id="comments" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
<li class="sidebar-item"><a class='sidebar-link' href='#'>Comments <span class="sidebar-badge badge bg-primary">ICT</span></a></li>
</ul>
</li>



<li class="sidebar-item">
<a data-bs-target="#donefiles" data-bs-toggle="collapse" class="sidebar-link collapsed">
<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Payments</span>
</a>
<ul id="donefiles" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
<li class="sidebar-item"><a class='sidebar-link' href='#'>Paid List <span class="sidebar-badge badge bg-primary">ICT</span></a></li>
</ul>
</li>

<li class="sidebar-header">
Tree For Life
</li>
<li class="sidebar-item">
<a data-bs-target="#form-plugins" data-bs-toggle="collapse" class="sidebar-link collapsed">
<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Distribution</span>
</a>
<ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
<li class="sidebar-item"><a class='sidebar-link' href='#'>Capture Distribution <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
<li class="sidebar-item"><a class='sidebar-link' href='#'>Captured Distributed List <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
</ul>
</li>
<li class="sidebar-item">
<a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
<i class="align-middle" data-feather="list"></i> <span class="align-middle">Request & Delivery</span>
</a>
<ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
<li class="sidebar-item"><a class='sidebar-link' href='#'>Seedling Request <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
<li class="sidebar-item"><a class='sidebar-link' href='#'>Seedlings Delivery <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
</ul>
</li>
<li class="sidebar-item">
<a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Planting</span>
</a>
<ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
<li class="sidebar-item"><a class='sidebar-link' href='#'>Planted List</a></li>
</ul>
</li>
<li class="sidebar-item">
<a data-bs-target="#maintenance" data-bs-toggle="collapse" class="sidebar-link collapsed">
<i class="align-middle" data-feather="map"></i> <span class="align-middle">Maintenance</span>
</a>
<ul id="maintenance" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
<li class="sidebar-item"><a class='sidebar-link' href='#'>Maintenance List</a></li>
</ul>
</li>




<li class="sidebar-item">
<a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
<i class="align-middle" data-feather="corner-right-down"></i> <span class="align-middle">Monitoring</span>
</a>
<ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
<li class="sidebar-item"><a class='sidebar-link' href='maps-google.html'>Monitoring List</a></li>
</ul>
</li>
</ul>



<li class="sidebar-header">
User Management
</li>
<li class="sidebar-item">
<a data-bs-target="#umanagements" data-bs-toggle="collapse" class="sidebar-link collapsed">
<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">User Setups</span>
</a>
<ul id="umanagements" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
<li class="sidebar-item"><a class='sidebar-link' href='{{ route('user.list.page') }}'>Users <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
</ul>
</li>




<div class="sidebar-cta">
<div class="sidebar-cta-content">
<div class="d-grid">
<a href="#" class="btn btn-outline-primary" target="_blank">Download Manual</a>
</div>
</div>
</div>
</div>
</nav>
