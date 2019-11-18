<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelAntrean extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrean', function (Blueprint $table) {
            $table->string('Idantrean', 10)->primary('Idantrean')->unique();
            $table->string('nik_pasien', 191);
            $table->string('nomor', 10);
            $table->string('idDaftarJadwal', 10);

            $table->foreign('nik_pasien')->references('nik')->on('pasien');
            $table->foreign('idDaftarJadwal')->references('daftarJadwal')->on('punyajadwal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrean');
    }
}
