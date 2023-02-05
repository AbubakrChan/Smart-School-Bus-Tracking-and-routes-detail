<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Nexmo\Response;
use App\User;
use App\student;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//
//    function insert(Request $req)
//    {
//       $image =" ";
//        if ($req->image) {
//            $image = time() . '.' . $req->image->extension();
//            $req->image->move(public_path('uploads'), $image);
//        }
//
//        student::create([
//           'name'=>$req->name,
//            'age' => $req->age,
//            'class' => $req->class,
//            'section' => $req->section,
//            'city' => $req->city,
//            'country' => $req->country,
//            'zip_code' => $req->zip_code,
//            'phone_number' => $req->phone_number,
//            'wieght' => $req->wieght,
//            'hieght' => $req->hieght,
//            'email' => $req->email,
//            'cnic' => $req->cnic,
//            'image'=>$image,
//        ]);
//        return Redirect::to('http://localhost:8000/home');
////
////        $users = DB::insert("Insert into user (first_name,last_name,age,section,country,city,zip_code,hieght,wieght,class,cnic,phone_number,email,image) values (? ,?,?,?,?,?,?,?,?,?,?,?,?,?)", [$req->first_name, $req->last_name, $req->age, $req->section, $req->country, $req->city, $req->zip_code, $req->hieght, $req->wieght, $req->class, $req->cnic, $req->phone_number, $req->email, $image]);
//
////
////                  $user  = new student();
////
////        $user->first_name =$req->first_name;
////        $user->last_name =$req->last_name;
////        $user->age =$req->age;
////        $user->class =$req->class;
////        $user->section =$req->section;
////        $user->city =$req->city;
////        $user->country =$req->country;
////        $user->zip_code =$req->zip_code;
////        $user->phone_number =$req->phone_number;
////        $user->wieght =$req->wieght;
////        $user->hieght =$req->hieght;
////        $user->email =$req->email;
////        $user->cnic =$req->cnic;
//
//
////        $user->password =$req->password;
//        //DB::insert('insert into users (email, votes) values (?, ?)', ['john@example.com', '0']);
////        crud_by_modal_db::table('user')->insert(
////            array('zip_code' => $req->zip_code,
////                'phone_number' => $req->phone_number,
////                'user' => $req->country,
////                'country' => $req->city,
////                'section' => $req->section,
////                'class' => $req->class,
////                'age' => $req->age,
////                'last_name' => $req->last_name,
////                'first_name' => $req->first_name,
////                'email' => $req->email,
////                'wieght' => $req->wieght,
////                'hieght' => $req->hieght,
////                'cnic' => $req->cnic)
////        );
//        //    $user->save();
//        //  crud_by_modal_db::insert('insert into users (id, first_name) values (?, ?)', [1, 'Dayle']);
//
//
//        // return view("crudbymodalview");
//
//    }
//
//    function delete($id)
//    {
//        $student= student::where('id',$id)->first();
//        $student->delete();
//        return redirect('home');
//    }
//
//    function detail($id)
//    {
//        $mydata = student::find($id);
//        return view('detail', ['data' => $mydata]);
//    }
//
//    function edit($id)
//    {
//        $mydata = student::find($id);
//        return view('edit', ['data' => $mydata]);
//    }
//
//    function update(Request $req)
//    {
////        $image = " ";
////        if ($req->image) {
////            $image = time() . '.' . $req->image->extension();
////            $req->image->move(public_path('uploads'), $image);
////        }
//        $data_1 =student::where('id',$req->id)->first();
//          $data = [
//              'name'=>$req->name,
//            'age' => $req->age,
//            'class' => $req->class,
//            'section' => $req->section,
//            'city' => $req->city,
//            'country' => $req->country,
//            'zip_code' => $req->zip_code,
//            'phone_number' => $req->phone_number,
//            'wieght' => $req->wieght,
//            'hieght' => $req->hieght,
//            'email' => $req->email,
//            'cnic' => $req->cnic,
////            'image'=>$req->image,
//        ];
//          $data_1->update($data);
//
//        return Redirect::to('http://localhost:8000/home');
//
////        $image= " ";
////        if ($req->image){
////            $image= time().'.'.$req->image->extension();
////            $req->image->move(public_path('uploads'),$image);
////        }
////        $users =DB::insert  ("Insert into user (first_name,last_name,age,section,country,city,zip_code,hieght,wieght,class,cnic,phone_number,email,image) values (? ,?,?,?,?,?,?,?,?,?,?,?,?,?)",[$req->first_name,$req->last_name,$req->age,$req->section,$req->country,$req->city,$req->zip_code,$req->hieght,$req->wieght,$req->class,$req->cnic,$req->phone_number,$req->email,$image])->where('id',$req->id);
////        return Redirect::to('http://localhost:8000/home');
//        //$dataa = student::find($req->id);
////        echo "<pre>";
////        print_r($req->id);
////        $dataa->name = $req->name;
////        $dataa->age = $req->age;
////        $dataa->save();
//        // return redirect('home');
//    }

}
//    function insert(Response $req){
//
//
//    }

