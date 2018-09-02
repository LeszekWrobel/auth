<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateumowasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umowas', function (Blueprint $table) {

            $table->increments('id');
            $table->date('date');
            $table->string('ip');
            $table->date('dataum');
            $table->char('nr');
            $table->integer('cenaum');
            $table->integer('cena');
            $table->string('nazwasukni');
            $table->string('firma');
            $table->string('rozmiar');
            $table->string('opis');
            $table->string('imie');
            $table->string('nazwisko');
            $table->char('pesel');
            $table->string('miasto');
            $table->string('kod_pocztowy');
            $table->string('adres');
            $table->integer('tel');
            $table->string('mail');
            $table->string('zdjecie');
            $table->integer('iduzytkownicy');
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
        Schema::dropIfExists('umowas');
    }
}
