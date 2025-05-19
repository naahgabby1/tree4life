@php
use Illuminate\Support\Facades\Auth;
@endphp

@switch(Auth::guard('loginguard')->user()->role_id)
@case(1)
@include('includes.menu.sup_admin')
@break

@case(2)
@include('includes.menu.admin')
@break

@case(3)
@include('includes.menu.validator')
@break

@case(4)
@include('includes.menu.authoriser')
@break

@case(5)
@include('includes.menu.reg_authoriser')
@break

@case(6)
@include('includes.menu.finance')
@break

@case(7)
@include('includes.menu.audit')
@break

@case(8)
@include('includes.menu.secretariat')
@break

@case(9)
@include('includes.menu.hr')
@break

@case(10)
@include('includes.menu.ed')
@break

@case(11)
@include('includes.menu.ce')
@break

@default
{{-- nill --}}
@endswitch
