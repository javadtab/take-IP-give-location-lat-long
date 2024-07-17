<?php

namespace App\Http\Controllers;

use Geocoder\Location;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $lat = $request->lat();
        $long = $request->long();
        $currentLoc = geoIP::getLocation($lat, $long );
        return view('user' , compact('currentLoc'));
    }
}


