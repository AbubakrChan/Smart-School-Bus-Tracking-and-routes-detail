<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        $index = 0;
        $data = Student::all();
//        $data = Student::all();
//        $countries = Country::all();
//        return view('insert', ['data' =>$Studennt_data ,"$countries"=>$countries]);
        return view('home', ['Students' => $data, 'index' => $index]);
//            ->with('countries',$countries);
    }

}
