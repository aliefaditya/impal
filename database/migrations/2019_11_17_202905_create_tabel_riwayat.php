<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelRiwayat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat', function (Blueprint $table) {
            $table->string('idRiwayat', 10)->primary('idRiwayat')->unique();
            $table->string('nik_pasien', 191);
            $table->string('kode_poli', 10);
            $table->string('Hari', 10);
            $table->string('JamMulai', 5);
            $table->string('JamAkhir', 5);
            $table->string('kode_dokter', 5);

            $table->foreign('nik_pasien')->references('nik')->on('pasien');
            $table->foreign('kode_poli')->references('KodePoli')->on('poli');
            $table->foreign('kode_dokter')->references('idDokter')->on('dokter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat');
    }
}
