<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
	public function __construct() {
		$this->middleware('guest:admin');
	}

    public function login(Request $request) {
    	$this->validate($request, [
    		'email' 	=> 'required | string',
    		'password'	=> 'required | string',
    	]);

    	$credentials = [
    		'email'		=> $request->email,
    		'password'	=> $request->password
    	];

    	$authOk = Auth::guard('admin')->attempt($credentials, $request->remember);

    	if($authOk) {
    		return redirect()->intended(route('home.admin'));
    	}
    	return redirect()->back()->withInputs($request->only('email','remember'));
    }

    public function index() {
    	return view('auth.admin-login');
    }
}
