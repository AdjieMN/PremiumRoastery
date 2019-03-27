<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->Integer('idOrder');
            $table->Integer('idCustomer');
            $table->Integer('idItem');
            $table->Integer('jumlah');
            $table->Integer('harga');
            $table->Integer('idDetailShipment');
            $table->String('deliveryDate');
            $table->Integer('totalHarga');
            $table->String('status',10);
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
        Schema::dropIfExists('_order');
    }
}
