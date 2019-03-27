<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailShipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_shipment', function (Blueprint $table) {
            $table->Integer('idDetailShiment');
            $table->String('nama',25);
            $table->Integer('idShiment');
            $table->Integer('idKategori');
            $table->Integer('durasi');
            $table->Integer('harga');
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
        Schema::dropIfExists('_detail_shipment');
    }
}
