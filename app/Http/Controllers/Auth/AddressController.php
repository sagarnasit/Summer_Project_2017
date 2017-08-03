<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AddressController extends Controller
{
	public function index(){
		// return Auth::user();
		$users = User::find(Auth::user()->id)->addresses;
		return view('Boot.login-security', compact('users'));
	}
}
