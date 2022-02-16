<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->string('jam');
            $table->foreignId('kode_pelajaran')->unsigned();
            $table->foreignId('kode_guru')->unsigned();
            $table->timestamps();
        });

                Schema::table('jadwal', function($table) {
            $table->foreign('kode_pelajaran')->references('id')->on('pelajaran');
            $table->foreign('kode_guru')->references('id')->on('pelajaran');
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
