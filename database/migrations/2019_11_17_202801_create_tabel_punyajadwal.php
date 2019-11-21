<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelPunyajadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punyajadwal', function (Blueprint $table) {
            $table->string('daftarJadwal', 10)->primary('daftarJadwal')->unique();
            $table->string('idPoli', 10);
            $table->string('idJadwal', 10);
            $table->string('idDokter', 6);

            $table->foreign('idPoli')->references('KodePoli')->on('poli');
            $table->foreign('idJadwal')->references('Idjadwal')->on('jadwal');
            $table->foreign('idDokter')->references('idDokter')->on('dokter');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('punyajadwal');
    }
}
