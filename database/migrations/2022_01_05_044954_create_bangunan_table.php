<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangunanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangunan', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('barcode');
            $table->string('nama_bangunan');
            $table->integer('jumlah_ruangan');
            $table->text('gambar')->nullable();
            $table->date('tanggal_berdiri');
            $table->string('kondisi');
            $table->string('keterangan');
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
        Schema::dropIfExists('bangunan');
    }
}
