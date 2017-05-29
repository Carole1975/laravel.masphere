<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisposRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispos_role', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->integer('dispo_id');
            $table->integer('user_id');
            // $table->foreign('dispo_id')->references('id')->on('dispos');
            //$table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('dispos_role');
    }
}
