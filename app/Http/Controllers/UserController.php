<?php

namespace App\Http\Controllers;

use Geocoder\Location;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $apiKey = 'service.ee36424147be4386be2a3f6821290c50';
        $apiUrl ="service.ee36424147be4386be2a3f6821290c50";

        try{
            $lat = $request->lat();
            $long = $request->long();
            $location = GeoIP::getLocation($lat . $long );
            return view('user' , compact('location'));
           // return redirect()->route('user');
        }  catch (\Exception) {

            }

    }
}


