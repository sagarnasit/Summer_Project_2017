<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscriber;
use App\User;
class ListController extends Controller
{
    public function subs(){
        $subs=Subscriber::all();
        return view('Vendor.lists.subscribers', compact(['subs']));
    }

    public function users(){
        $users=User::all();
        return view('Vendor.lists.users', compact(['users']));
    }
}
