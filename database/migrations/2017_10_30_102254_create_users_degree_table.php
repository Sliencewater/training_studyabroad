<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersDegreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_degree', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('degree_id')->comment('Degree:1-Doctor,2-Master,3-Bachelor,4-High School Certificate,5-Other');
            $table->string('degree_name')->comment('Degree Name');
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
        Schema::dropIfExists('users_degree');
    }
}
