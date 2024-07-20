<?php

namespace App\Http\Controllers;

use Adrianorosa\GeoLocation\GeoLocation;
use Geocoder\Location;
use Illuminate\Http\Request;
use League\CommonMark\Node\Block\Document;
use Torann\GeoIP\Facades\GeoIP;


class UserController extends Controller
{
    public function index(Request $request)
    {

          $lat = $request->lat;
          $long = $request->long;

         return view('user' , compact('lat','long'));
    }

    public function showMap(lat $lat , long $long)
    {

          var  coord = { lat:lat , long:long};
        new  google.maps.Map(document.getElementById("map"),
         {
            zoom:10 ,
            center:coord
         }
    );

    }
}


