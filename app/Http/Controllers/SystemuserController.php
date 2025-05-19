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
$validated = $request->validate([
'username' => 'required|string|max:20',
'role_id' => 'required'
], [
'username.required' => 'Please enter user staff ID.',
'role_id.required' => 'Please select a role'
]);

Systemuser::firstOrCreate(
['username' => $request->input('username')],
['password' => Hash::make('$P@ssw0rd'),
'role_id' => $request->input('role_id'),
'forlife_permission' => $request->input('chex_permission_t4l'),
'yfc_permission' => $request->input('chex_permission_yfc'),
'status' => 1
]
);
$notification = array(
'message'=>"User Created",
'alert-type'=>'success',
);
return back()->with($notification);
}

public function reset_user(Request $request, $id){
Systemuser::where('id', $id)->update([
'password' => Hash::make('$P@ssw0rd')
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
'forlife_permission' => $request->input('forlife_permission_edits'),
'yfc_permission' => $request->input('yfc_permission_edits'),
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
Systemuser::find($id)->delete();
$notification = array(
'message'=>"User Deleted",
'alert-type'=>'success',
);
return back()->with($notification);
}
}
