<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // FIXME: FK NGGAK BISA DIATAS TABEL YANG DIJADIIN REFRENSI 
            $table->foreignId('id_admin')->constrained('admin')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_guru')->constrained('guru')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_siswa')->constrained('siswa')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
}
