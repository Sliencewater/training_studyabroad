<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNationaltyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nationalty', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('nationalty_id')->comment('Nationalty ID');
            $table->string('nationalty_name')->comment('Nationalty Name');
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
        Schema::dropIfExists('nationalty');
    }
}
