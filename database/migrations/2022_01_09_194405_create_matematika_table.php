<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatematikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matematika', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('barcode')->nullable();
            $table->string('nama_barang');
            // $table->integer('jumlah');
            $table->text('gambar')->nullable();
            $table->date('tanggal');
            $table->string('kondisi');
            $table->string('keterangan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matematika');
    }
}
