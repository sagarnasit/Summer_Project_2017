<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserProfile extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('Vendor.product.addbrand',compact('brands'));
    }
}
