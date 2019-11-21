<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('pasien', function (Blueprint $table) {
            $table->string('nik')->primary('nik')->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username');
            $table->date('ttl');
            $table->mediumText('alamat');
            $table->string('telepon')->nullable();
            $table->boolean('isAdmin')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('pasien');
    }
}
