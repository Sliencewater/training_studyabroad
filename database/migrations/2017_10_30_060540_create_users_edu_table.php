<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersEduTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_edu', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('User ID')->unique();
            $table->unsignedTinyInteger('degree')->comment('Degree:1-Doctor,2-Master,3-Bachelor,4-High School Certificate,5-Other');
            $table->string('Institution')->comment('Institution');
            $table->date('starting_time')->comment('Starting Time');
            $table->date('ending_time')->comment('Ending Time');
            $table->unsignedTinyInteger('is_highest_diploma')->comment('Highest Diploma:1-True,2-False');
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
        Schema::dropIfExists('users_edu');
    }
}
