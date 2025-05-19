<div class="modal fade" id="modalEditUser{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
<div class="modal-dialog" role="document">
<div class="modal-content">
<form action="{{ route('update.user.submit', $user->id)}}" method="post">
@csrf
@method('PUT')
<div class="modal-header">
<h4 class="modal-title">Register System Users</h4><br />
{{-- <h6 class="modal-title">Enter Staff ID and a user role to </h6> --}}
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body m-3">
<div class="row">
<div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 colo-xs-12">
<a class="pe-3" href="#">
<img src="{{asset('app_assets/assets/t4l/user.png')}}" width="150" height="150" class="rounded-circle me-2" alt="Christina Mason">
</a>
</div>
</div>


<div class="row">
<div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 colo-xs-12">
<label for="Username" class="mb-1">Enter Staff ID Here</label>
<input class="form-control form-control-lg mb-3" type="text" name="username_edits" placeholder="Enter Staff ID"
value="{{ $user->username }}">
</div>
<div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 colo-xs-12">
<label for="Username" class="mb-1">Enter Staff ID Here</label>
<select class="form-control form-control-lg choices-single" name="role_id_edits">


<option value="{{ $user->role_id }}">{{ $user->user_role }}</option>

<optgroup label="Registered roles to select from">
@foreach($role_data as $role)
<option value="{{ $role->id }}">{{ $role->name }}</option>
@endforeach
</optgroup>
</select>
</div>
</div>
<hr>
<small>Select single or multiple permission for this user</small>
<div class="row">
<div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12 colo-xs-12">
<label class="form-check form-check-inline">
<input class="form-check-input lg" type="checkbox" value="1" name="chex_permission_yfc_edits"
{{ $user->yfc_permission === 1 ? 'checked' : '' }}>
<span class="form-check-label">
Permission for YFC
</span>
</label>
<label class="form-check form-check-inline">
<input class="form-check-input lg" type="checkbox" value="1" name="chex_permission_t4l_edits"
{{ $user->forlife_permission === 1 ? 'checked' : '' }}>
<span class="form-check-label">
Permission for T4Life
</span>
</label>
</div>
</div>
<hr>
<div class="row">
<div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 colo-xs-6">
<label for="Username" class="mb-1">Change Status</label>
<select class="form-control form-control-lg choices-single" name="status_edits">
<option value="{{ $user->status }}">{{ $user->status == 0 ? 'Archived' : 'Active'}}</option>
<option value="1">Active</option>
<option value="0">Archive</option>
</select>
</div>
<div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 colo-xs-6">
<label for="Username" class="mb-1">Phone Number</label>
<input class="form-control form-control-lg mb-3" value="{{ $user->phone_number }}" type="text" name="staff_phone_number_edits" placeholder="Enter phone number">
</div>
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Save changes</button>
</div>
</form>
</div>
</div>
</div>
