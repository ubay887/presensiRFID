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
            $table->string('nipd', 20)->unsigned();
            $table->foreign('nipd')->references('nipd')->on('siswa')->onDelete('no action')->onUpdate('no action');
            $table->string('nama')->unsigned();
            $table->foreign('nama')->references('nama')->on('siswa')->onDelete('no action')->onUpdate('no action');
            $table->string('foto_tapping');
            $table->date('tanggal');
            $table->time('jam_masuk');
            $table->time('jam_pulang');
            $table->time('check_in');
            $table->time('late_in');
            $table->string('ket', 20);
            $table->string('stat', 20);
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
