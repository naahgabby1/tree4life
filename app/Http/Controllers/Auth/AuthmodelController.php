<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthmodelController extends Controller
{
public function index(){
$title = 'Login';
$breadCrumbs = 'System Login';
return view('pages.auth.index', compact('title','breadCrumbs'));
}





public function auth_login(Request $request){
$credentials = $request->only('username', 'password');
$title = 'Login';
if (Auth::guard('loginguard')->attempt($credentials)) {
$request->session()->regenerate();
return redirect()->intended('dashboard');
}
return back()->withErrors(['message' => 'Failed to login']);

}




// Logouts

public function auth_logout(Request $request){
    Auth::guard('loginguard')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    Session::flush();
    return redirect('login');
}

}
