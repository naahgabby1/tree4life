<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Systemuser;
use App\Models\Authmodel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SystemuserController extends Controller
{
public function user_profile(){
$title = 'Profile';
$breadCrumbs = 'User Profile';
return view('pages.profile.index', compact('title','breadCrumbs'));
}


public function index(){
$title = 'Users';
$breadCrumbs = 'System Users';
$users_data = Authmodel::all();
$role_data = DB::table('tbl_role')->get();
return view('pages.users.index', compact('title','breadCrumbs','users_data','role_data'));
}

public function save_user(Request $request){
$title = 'Users';
$breadCrumbs = 'System Users';

if($request->input('chex_permission_t4l')==''){
$t4lpermission = 0;
}else{
$t4lpermission = 1;
}
if($request->input('chex_permission_yfc')==''){
$yfcpermission = 0;
}else{
$yfcpermission = 1;
}

$validated = $request->validate([
'username' => 'required|string|max:20',
'role_id' => 'required',
'staff_phone_number' => 'required'

], [
'username.required' => 'Please enter user staff ID.',
'role_id.required' => 'Please select a role',
'staff_phone_number.required' => 'Please enter phone number'
]);

Systemuser::firstOrCreate(
['username' => $request->input('username')],
['password' => Hash::make('$P@ssw0rd'),
'role_id' => $request->input('role_id'),
'forlife_permission' => $t4lpermission,
'yfc_permission' => $yfcpermission,
'status' => 1,
'phone_number' => $request->input('staff_phone_number')
]
);
$notification = array(
'message'=>"User Created",
'alert-type'=>'success',
);
return back()->with($notification);
}

public function reset_todefault($id){
Systemuser::where('id',$id)->where('reset_tokken', 1)->update([
'password' => Hash::make('$P@ssw0rd'),
'reset_tokken' => 0
]);
$notification = array(
'message'=>"User Password Resetted",
'alert-type'=>'success',
);
return back()->with($notification);
}


public function update_user(Request $request, $id){
$title = 'Users';
$breadCrumbs = 'System Users';
if($request->input('chex_permission_t4l_edits')==''){
$t4lpermission = 0;
}else{
$t4lpermission = 1;
}
if($request->input('chex_permission_yfc_edits')==''){
$yfcpermission = 0;
}else{
$yfcpermission = 1;
}
$validated = $request->validate([
'username_edits' => 'required|string|max:20',
'role_id_edits' => 'required',
'status_edits' => 'required'
], [
'username_edits.required' => 'Please enter user staff ID.',
'role_id_edits.required' => 'Please select a role',
'status_edits.required' => 'Check user status'
]);
Systemuser::where('id', $id)->update([
'username' => $request->input('username_edits'),
'role_id' => $request->input('role_id_edits'),
'forlife_permission' => $t4lpermission,
'yfc_permission' => $yfcpermission,
'phone_number' => $request->input('staff_phone_number_edits'),
'status' => $request->input('status_edits')
]);
$notification = array(
'message'=>"User Updated",
'alert-type'=>'success',
);
return back()->with($notification);
}

public function destroy_user($id){
$title = 'Users';
$breadCrumbs = 'System Users';
Systemuser::findOrFail($id)->delete();
$notification = array(
'message'=>"User Deleted",
'alert-type'=>'success',
);
return back()->with($notification);
}
}
