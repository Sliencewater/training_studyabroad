<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserContactInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users_contact_information', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('User ID')->unique();
            $table->string('own_country_address')->comment('Own Country Street Address');
            $table->string('own_country_phone')->comment('Own Country Phone Number');
            $table->string('province_city')->comment('Own Country Province/City');
            $table->string('country')->comment('Country');
            $table->string('postcode')->comment('postcode')->nullable();
            $table->string('email')->comment('email');
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
        //
        Schema::dropIfExists('users_contact_information');
    }
}
