<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    protected $table = 'driver';
    protected $fillable = ['driver_id','driver_name','driver_contact'];

}
