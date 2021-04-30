<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoupleEnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couple_en', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('skck_en_id');
            $table->string('name');
            $table->string('age');
            $table->string('relegion');
            $table->string('nationality');
            $table->string('profession');
            $table->string('address');
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
        Schema::dropIfExists('couple_en');
    }
}
