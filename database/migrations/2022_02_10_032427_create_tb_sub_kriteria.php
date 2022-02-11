<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSubKriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sub_kriteria', function (Blueprint $table) {
            $table->id('id_sub_kriteria');
            $table->integer('id_pengguna');
            $table->float('c1_sub_kriteria');
            $table->float('c21_sub_kriteria');
            $table->float('c22_sub_kriteria');
            $table->float('c23_sub_kriteria');
            $table->float('c24_sub_kriteria');
            $table->float('c25_sub_kriteria');
            $table->float('c26_sub_kriteria');
            $table->float('c27_sub_kriteria');
            $table->float('c28_sub_kriteria');
            $table->float('c29_sub_kriteria');
            $table->float('c31_sub_kriteria');
            $table->float('c41_sub_kriteria');
            $table->float('c42_sub_kriteria');
            $table->float('c43_sub_kriteria');
            $table->float('c44_sub_kriteria');
            $table->float('c45_sub_kriteria');
            $table->float('c46_sub_kriteria');
            $table->float('c47_sub_kriteria');
            $table->float('c48_sub_kriteria');
            $table->float('c49_sub_kriteria');
            $table->float('c51_sub_kriteria');
            $table->float('c52_sub_kriteria');
            $table->float('c53_sub_kriteria');
            $table->float('c54_sub_kriteria');
            $table->float('c55_sub_kriteria');
            $table->float('c56_sub_kriteria');
            $table->float('c57_sub_kriteria');
            $table->float('c58_sub_kriteria');
            $table->float('c59_sub_kriteria');
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
        Schema::dropIfExists('tb_sub_kriteria');
    }
}
