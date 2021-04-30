<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkckFormEnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skck_form_en', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('born');
            $table->string('date');
            $table->string('relegion');
            $table->string('nationality');
            $table->string('gender');
            $table->string('profession');
            $table->string('address');
            $table->string('nik');
            $table->string('no_passport');
            $table->string('no_kita_kitap');
            $table->string('no_telp');
            $table->string('kk_image');
            $table->string('your_image');
            $table->string('fingerprint_image');
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
        Schema::dropIfExists('skck_form_en');
    }
}
