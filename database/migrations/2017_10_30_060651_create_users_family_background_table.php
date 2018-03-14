<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersFamilyBackgroundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_family_background', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('User ID')->unique();
            $table->string('name')->comment('Name');
            $table->string('phone')->comment('Phone Number');
            $table->string('email')->comment('Email');
            $table->string('profession')->comment('Profession');
            $table->string('employer')->comment('Employer');
            $table->string('relationship')->comment('Relationship');
            $table->unsignedTinyInteger('is_financial_assurer')->comment('Financial Assurer of Institution');
            $table->unsignedTinyInteger('is_emergency_contact')->comment('Emergency Contact');
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
        Schema::dropIfExists('users_family_background');
    }
}
