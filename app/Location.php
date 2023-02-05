<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    //

    protected $table = 'location';
    protected $fillable = ['id','driver_id','latitude','longitude'];
    //  protected $fillable = ['first name'];

}
