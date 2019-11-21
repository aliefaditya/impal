<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->string('Idjadwal', 10)->primary('Idjadwal')->unique();
            $table->string('Hari', 10);
            $table->string('JamMulai', 5);
            $table->string('JamAkhir', 5);
            $table->boolean('Available');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
