<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscribersController extends Controller
{
	public function store(Request $request){
		//dd(request()->all());
		$this->validate(request(),[
			'email' => 'required|email'
			]);
		$email=Subscriber::where('email',request('email'))->first();
		if(isset($email)){
			\Session::flash('subscriber.level', 'danger');
			\Session::flash('subscriber.content','Subscriber already exists in the subscription database !!!');
			return back();
		}
		else{
			Subscriber::create(request(['email']));
			\Session::flash('subscriber.level', 'success');
			\Session::flash('subscriber.content','Thank You: Your Subscription Has Been Successfully Added !!!');
			return back();
		}
	}
}
