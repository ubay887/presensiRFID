<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAksesRuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akses_ruangan', function (Blueprint $table) {
            $table->id();
            $table->timestamp('Waktu')->nullable(false)->useCurrent();
            $table->string('id_siswa', 20);
            $table->foreign('id_siswa')->references('id')->on('siswa');
            $table->string('NAMA', 70);
            $table->foreign('NAMA')->references('NAMA')->on('siswa');
            $table->integer('id_ruangan');
            $table->foreign('id_ruangan')->references('id')->on('ruangan')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('akses_ruangan');
    }
}
