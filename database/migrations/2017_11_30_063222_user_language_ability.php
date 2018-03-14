<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserLanguageAbility extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_language_ability', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('User ID')->unique();
            $table->unsignedTinyInteger('chinese_level')->comment('Chinese Level');
            $table->unsignedTinyInteger('hsk_result')->comment('HSK Result')->nullable();
            $table->unsignedTinyInteger('New_HSK_Oral_Test')->comment('New HSK Oral Test')->nullable();
            $table->unsignedTinyInteger('New_HSK_Written_Test')->comment('New HSK Written Test')->nullable();
            $table->unsignedTinyInteger('English_Level')->comment('English Level');
            $table->string('toefl')->comment('TOEFL')->nullable();
            $table->string('gre')->comment('GRE')->nullable();
            $table->string('ielts')->comment('IELTS')->nullable();
            $table->string('gmat')->comment('GMAT')->nullable();
            $table->string('foreign_language')->comment('Foreign Language')->nullable();
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
        Schema::dropIfExists('user_language_ability');
    }
}
