<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersBasicInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_basic_info', function (Blueprint $table) {
            $table->increments('id')->comment('Incrementing ID');
            $table->unsignedInteger('user_id')->comment('User ID')->unique();
            $table->string('surname')->comment('Surname on Passport');
            $table->string('first_name')->comment('First name on Passport');
            $table->string('chinese_name')->comment('Chinese Name')->nullable();
            $table->string('phone')->comment('Phone Number');
            $table->char('gender',1)->comment('Gender:1-Male,0-Female ')->default('1');
            $table->char('marital_status',1)->comment('Marital Status:1-Single,2-Married')->default('1');
            $table->string('nationalty')->comment('Nationalty');
            $table->string('birth_place')->comment('Birth Place');
            $table->date('birth_date')->comment('Birth Date');
            $table->string('health_condition')->comment('Health Condition');
            $table->string('home_institution')->comment('Home Institution');
            $table->string('native_language')->comment('Native Language');
            $table->string('religion')->comment('Religion')->nullable();
            $table->string('speciality_hobby')->comment('Speciality & Hobby')->nullable();
            $table->unsignedTinyInteger('study_period')->comment('Study Period');
            $table->unsignedTinyInteger('program_category')->comment('Program Category');
            $table->unsignedTinyInteger('financial_support')->comment('Financial Support');
            $table->string('passport_number')->comment('Passport Number');
            $table->date('passport_expired_time')->comment('Passport Expired Time');
            $table->unsignedTinyInteger('visa_category')->comment('Visa category');
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
        Schema::dropIfExists('users_basics_info');
    }
}
