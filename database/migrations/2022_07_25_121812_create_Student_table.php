<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('roll_no')   ;
            $table->string('name');
            $table->string('fname');
            $table->string('lname')->nullable();
            $table->string('age');
            $table->string('section');
            $table->string('country');
            $table->string('city');
            $table->string('zip_code');
            $table->string('hieght');
            $table->string('wieght');
            $table->string('class');
            $table->string('cnic');
            $table->string('phone_number');
            $table->string('email');
            $table->string('image');
            $table->SoftDeletes();
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
        Schema::dropIfExists('user');
    }
}
