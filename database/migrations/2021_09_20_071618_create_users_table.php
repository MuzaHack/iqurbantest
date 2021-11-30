<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            //$table->id();
            //$table->timestamps();


            $table->id()->startingValue(1000);
            //$table->increments('id');
            $table->string('user_name');
            $table->string('user_ic');
            $table->string('user_email')->unique();
            $table->string('user_phone');
            $table->string('user_address');
            $table->string('user_password');

            




        });



        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
