<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {

        $index = 0;
        $data = Student::all();
//        $data = Student::all();
//        $countries = Country::all();
//        return view('insert', ['data' =>$Studennt_data ,"$countries"=>$countries]);
        return view('user', ['Students' => $data, 'index' => $index]);
//            ->with('countries',$countries);
    }
}
