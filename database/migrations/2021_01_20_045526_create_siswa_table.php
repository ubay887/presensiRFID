<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nipd', 20)->unique();
            $table->string('idrfid')->unique()->nullable();
            $table->string('idtelegram', 20)->unique()->nullable();
            $table->date('tanggal_lahir');
            $table->string('password');
            $table->string('passwordcrypt');
            $table->string('foto')->nullable();
            $table->string('nama');
            $table->enum('kelamin', ['l', 'p']);
            $table->foreignId('id_kelas')->constrained('kelas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('siswa');
    }
}
