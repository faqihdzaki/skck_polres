<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrtherInformationEnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orther_information_en', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('skck_en_id');
            $table->string('profession_history');
            $table->string('hoby');
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
        Schema::dropIfExists('orther_information_en');
    }
}
