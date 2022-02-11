<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kriteria', function (Blueprint $table) {
            $table->id('id_kriteria');
            
            $table->string('nama_kriteria')->nullable();
            $table->enum('tipe_kriteria',['benefit','cost']);
            $table->enum('jenis_sk_kriteria',['Penuh','Memiliki','Tidak Memiliki']);
            $table->string('nama_sk_kriteria');
            $table->float('bobot_final_kriteria')->nullable();
            $table->float('bobot_sk_kriteria');
            $table->float('nilai_sk_kriteria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_kriteria');
    }
}
