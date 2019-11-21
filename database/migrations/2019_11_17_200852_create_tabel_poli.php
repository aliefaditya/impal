<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelPoli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poli', function (Blueprint $table) {
            $table->string('KodePoli', 10)->primary('KodePoli')->unique();
            $table->string('NamaPoli', 50);
            $table->text('Deskripsi');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poli');
    }
}
