<?php

namespace App\Http\Controllers;

use Adrianorosa\GeoLocation\GeoLocation;
use Geocoder\Location;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $apiKey = 'service.b74ac64cccb14499b4a1f65042484a04';
        $apiUrl ="https://api.neshan.org/v5/reverse?lat=LATITUDE&lng=LONGITUDE";

            $lat = $request->lat;
            $long = $request->long;
            $location = GeoLocation::lookup("59.8983");
            return view('user' , compact('location'));


    }
}


