<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //
    protected $table = 'user';
   protected $fillable = ['id','route_no','driver_name','driver_contact','destination','bus_no','bus_stops','route_map','image'];
  //  protected $fillable = ['first name'];

}
