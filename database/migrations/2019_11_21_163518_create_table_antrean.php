<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAntrean extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create the table
        Schema::create('antrean', function (Blueprint $table){
           $table->primary('IdAntrean');
           $table->increments('IdAntrean');
           $table->unique('nomor');
           $table->dateTime('created_at'); 
           $table->timestamps()->nullable();

           $table->foreign('nik_pasien')->references('nik')->on('pasien');
           $table->foreign('jadwal_poli')->references('Idjadwal')->on('jadwal');
           
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //delete or rollback the table
        Schema::dropIfExists('antrean');
    }
}
