<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehadiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->id();
            $table->string('id_siswa', 20);
            $table->foreign('id_siswa')->references('id')->on('siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->string('no_induk', 20);
            $table->foreign('no_induk')->references('no_induk')->on('siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama', 20);
            $table->foreign('nama')->references('nama')->on('siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal')->nullable(false);
            $table->time('jam_masuk')->nullable();
            $table->time('check_in')->nullable();
            $table->time('late_in')->nullable();
            $table->time('jam_pulang')->nullable();
            $table->time('check_out')->nullable();
            $table->time('early_out')->nullable();
            $table->string('ket', 20)->nullable();
            $table->string('stat', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kehadiran');
    }
}
