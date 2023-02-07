<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->increments('driver_id');
           // $table->increments('bus_id');

       //     $table->renameColumn('driver_id', 'id');
            $table->integer('route_no');
            $table->string('destination');
            $table->string('bus_no');
            $table->longText('route_map');
            $table->string('bus_stops');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus');
    }
}
