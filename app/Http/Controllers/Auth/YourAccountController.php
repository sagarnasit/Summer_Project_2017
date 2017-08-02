<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class YourAccountController extends Controller
{
	public function loginsecurity(){

		$users = User::find(Auth::user()->id)->id;

		$this->validate(request(),[

			'name' => 'required',

			'email' => 'required|email',

			'password' => 'required'
			
			]);

		User::where('id',$users)->update(['name' => 'name','email' => 'email','password' => 'password']);
		// create(request(['name','email','password']))

		return redirect('/your-account');
	}

	public function addresses(){
		// return Auth::user();
		$users = User::find(Auth::user()->id)->addresses;
		return view('Boot.addresses', compact('users'));
	}
}
