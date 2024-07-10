<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{
    public function index(Request $request)
    {
        //$ip = $request->ip();
        $ip ='17.172.224.47';
        $currentLoc = Location::get($ip);
        return view('user' , compact('currentLoc'));
    }
}


