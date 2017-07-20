<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscribersController extends Controller
{
	public function store(){
		//dd(request()->all());
		$this->validate(request(),[
			'email' => 'required|email'
			]);
		Subscriber::create(request(['email']));
		// $sub= new Subscriber;
		// $sub->email= request('subscribers');
		// $sub->save();
		return redirect('/');
	}
}
