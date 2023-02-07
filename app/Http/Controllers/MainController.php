<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Auth;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Country;
use App\Location;
use App\Driver;
use App\Bus;


//use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */

    public function index(Request $req)
    {
        $index = 0 ;
        $driver_data = Driver::all() + Bus::all();

        return view('index', ['Students' => $driver_data, 'index' => $index]);
    }

    public function store(Request $req)
    {
 //       $image =" ";
   //     if ($req->image) {
     //       $image = time() . '.' . $req->image->extension();
       //     $req->image->move(public_path('uploads'), $image);
        //}
        driver::create([
            'driver_name' => $req->driver_name,
            'driver_contact' => $req->driver_contact,
        ]);
        bus::create([
            'route_no' => $req->route_no,
            'destination' => $req->destination,
            'bus_no' => $req->bus_no,
            'bus_stops' => $req->bus_stops,
            'route_map' => $req->route_map,
          //  'image' => $image,
        ]);
        return Redirect::to('http://localhost:8000/home');
    }


        public function store1(Request $req)
        {
      //      $image = " ";
        //    if ($req->image) {
             //   $image = time() . '.' . $req->image->extension();
               // $req->image->move(public_path('uploads'), $image);
            //}
            // explode name here with space
            // get array
            //fname index[0]
            //lname every other index '' or null
            // difference between '' and null

           $tt= student::create([
               'route_no' => $req->route_no,
               'driver_name' => $req->driver_name,
               'driver_contact' => $req->driver_contact,
               'destination' => $req->destination,
               'bus_no' => $req->bus_no,
               'bus_stops' => $req->bus_stops,
               'route_map' => $req->route_map,
              // 'image' => $image,
            ]);
            $index = 0 ;
            $data = Student::all();
            return Redirect::to('http://localhost:8000/home');
            //return view('index', ['Students' => $data, 'index' => $index]  );

    //
        }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mydata = student::find($id);
        return view('detail', ['data' => $mydata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mydata = student::find($id);
        return view('edit', ['data' => $mydata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $req
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $req)
    {
        $data_1 = student::where('id', $req->id)->first();
        $data = [
            'route_no' => $req->route_no,
            'driver_name' => $req->driver_name,
            'driver_contact' => $req->driver_contact,
            'destination' => $req->destination,
            'bus_no' => $req->bus_no,
            'route_map' => $req->route_map,
            'bus_stops' => $req->bus_stops,

//            'image'=>$req->image,
        ];
        $data_1->update($data);

        return Redirect::to('http://localhost:8000/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $student = student::find($id);
        $student->delete();
        return redirect('home');
    }

}
