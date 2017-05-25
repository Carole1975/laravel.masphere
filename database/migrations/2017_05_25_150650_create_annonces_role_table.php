<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::enableForeignKeyConstraints();

//Schema::disableForeignKeyConstraints();
        Schema::create('annonces_role', function (Blueprint $table) {
            $table->increments('role_id');
            $table->integer('annonce_id');
            $table->integer('user_id');
            //$table->foreign('annonce_id')->references('id')->on('annonces');
            //$table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            //
        });
    }

        /**
     * Reverse the migrations.
     *
     * @return void
     */
        public function down()
        {
            Schema::dropIfExists('annonces_role');
        }
    }
