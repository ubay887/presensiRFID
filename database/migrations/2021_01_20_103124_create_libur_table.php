<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiburTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libur', function (Blueprint $table) {
            $table->id();
            $table->string('h_libur_1', 20)->nullable();
            $table->string('h_libur_2', 20)->nullable();
            $table->date('t_libur_3')->nullable();
            $table->date('t_libur_4')->nullable();
            $table->date('t_libur_5')->nullable();
            $table->date('t_libur_6a')->nullable();
            $table->date('t_libur_6b')->nullable();
            $table->date('t_libur_7a')->nullable();
            $table->date('t_libur_7b')->nullable();
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
        Schema::dropIfExists('libur');
    }
}
