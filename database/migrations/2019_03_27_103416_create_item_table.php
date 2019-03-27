<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->Integer('idItem');
            $table->String('namaItem',25);
            $table->String('deskripsi');
            $table->String('asal',25);
            $table->String('profil',25);
            $table->String('notes',30);
            $table->Integer('berat');
            $table->Integer('harga');
            $table->Integer('idKategori');
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
        Schema::dropIfExists('_item');
    }
}
