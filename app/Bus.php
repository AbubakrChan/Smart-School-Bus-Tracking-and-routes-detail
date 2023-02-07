<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bus extends Model
{
    protected $table = 'bus';
    protected $fillable = ['id','driver_id','route_no','destination','bus_no','route_map','bus_stops','image'];
}
