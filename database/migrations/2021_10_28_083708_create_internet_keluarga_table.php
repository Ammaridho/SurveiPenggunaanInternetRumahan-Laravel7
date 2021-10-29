<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternetKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internet_keluarga', function (Blueprint $table) {
            $table->id();
            $table->String('namaKeluarga',50);
            $table->String('provider',25);
            $table->integer('bandwidth');
            $table->integer('biayaBulanan');
            $table->integer('jumlahPenghuni');
            $table->enum('kesimpulan',['kurang','cukup','lebih']);
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
        Schema::dropIfExists('internet_keluarga');
    }
}
