<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailGadgetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_gadget', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_penghuni_id');
            $table->String('namaGadget');
            $table->enum('range',['ringan','sedang','berat']);
            // $table->timestamps();


            $table->foreign('data_penghuni_id')->references('id')->on('data_penghuni');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_gadget');
    }
}
