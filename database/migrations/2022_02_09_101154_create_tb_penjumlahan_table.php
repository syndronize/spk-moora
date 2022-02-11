<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPenjumlahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penjumlahan', function (Blueprint $table) {
            $table->id('id_penjumlahan');
            $table->integer('id_pengguna')->nullable();
            $table->integer('id_kriteria')->nullable();
            $table->float('penjumlahan_1')->nullable();
            $table->float('penjumlahan_2')->nullable();
            $table->float('penjumlahan_akhir')->nullable();
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
        Schema::dropIfExists('tb_penjumlahan');
    }
}
