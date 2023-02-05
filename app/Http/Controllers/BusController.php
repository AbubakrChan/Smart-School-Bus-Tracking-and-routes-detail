<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BusController extends Controller
{
    //
    public function track_bus_live()
    {


        $data = Location::all();
//        $data = Student::all();
//        $countries = Country::all();
//        return view('insert', ['data' =>$Studennt_data ,"$countries"=>$countries]);
        return view('track_bus_live', ['location' => $data]);
//            ->with('countries',$countries);
    }
    public function store_location(Request $req)
    {
        // dd( $req);

        $tt= Location::create([

            //     'latitude' => $req->latitude,
            'driver_id' => "1",
            'latitude' => $req->latitude,
            'longitude' => $req->longitude,
            //   'longitude' => $req->longitude,


        ]);
        return Redirect::to('http://localhost:8000/home');

//
    }

}
