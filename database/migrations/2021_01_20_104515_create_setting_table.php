<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('zona')->nullable();
            $table->time('jam_masuk_1')->nullable();
            $table->time('jam_masuk_2')->nullable();
            $table->time('jam_masuk_3')->nullable();
            $table->time('jam_pulang_1')->nullable();
            $table->time('jam_pulang_2')->nullable();
            $table->time('jam_pulang_3')->nullable();
            $table->string('token', 100)->nullable();
            $table->tinyInteger('sw')->nullable();
            $table->tinyInteger('sw_2')->nullable();
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
        Schema::dropIfExists('setting');
    }
}
