<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_level', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('language_level_id')->comment('Language Level ID');
            $table->string('ability_level')->comment('Language Ability Level')->nullable();
            $table->string('ability_result')->comment('Language Ability Result')->nullable();
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
        Schema::dropIfExists('language_level');
    }
}
