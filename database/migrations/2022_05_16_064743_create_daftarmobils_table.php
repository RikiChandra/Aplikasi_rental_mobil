<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarmobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarmobils', function (Blueprint $table) {
            $table->id();
            $table->string('gambar')->nullable();
            $table->foreignId('vendor_id');
            $table->string('nama_mobil');
            $table->string('transmisi');
            $table->integer('harga_sewa');
            $table->integer('denda');
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
        Schema::dropIfExists('daftarmobils');
    }
}
