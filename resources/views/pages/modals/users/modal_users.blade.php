<div class="modal fade" id="modalAddUser" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
<div class="modal-dialog" role="document">
<div class="modal-content">
<form action="{{ route('save.user.submit')}}" method="post">
@csrf
@method('POST')
<div class="modal-header">
<h4 class="modal-title">Register System Users</h4><br />
{{-- <h6 class="modal-title">Enter Staff ID and a user role to </h6> --}}
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body m-3">
<div class="row">
<div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 colo-xs-12">
<label for="Username" class="mb-1">Enter Staff ID Here</label>
<input class="form-control form-control-lg mb-3" type="text" name="username" placeholder="Enter Staff ID">
</div>
<div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6 colo-xs-12">
<label for="Username" class="mb-1">Enter Staff ID Here</label>
<select class="form-control form-control-lg choices-single" name="role_id">


<option value="">Select User Role</option>

<optgroup label="Registered roles to select from">
@foreach($role_data as $role)
<option value="{{ $role->id }}">{{ $role->name }}</option>
@endforeach
</optgroup>
</select>
</div>
</div>
<small>Select single or multiple permission for this iser</small>
<div>
<label class="form-check form-check-inline">
<input class="form-check-input lg" type="checkbox" value="1" name="chex_permission_yfc">
<span class="form-check-label">
Permission for YFC
</span>
</label>
<label class="form-check form-check-inline">
<input class="form-check-input lg" type="checkbox" value="1" name="chex_permission_t4l">
<span class="form-check-label">
Permission for T4Life
</span>
</label>
</div>
<hr>
<div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12 colo-xs-12">
<label for="Username" class="mb-1">Phone Number</label>
<input class="form-control form-control-lg mb-3" type="text" name="staff_phone_number" placeholder="Enter phone number">
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
