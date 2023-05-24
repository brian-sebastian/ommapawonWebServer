<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatRestopayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_restopay', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penerima_id')->index();
            $table->string('penerima_phone',14)->index();
            $table->decimal('nominal',10,2)->default("0");
            $table->enum('jenis_transaksi',['topup','refound'])->default("topup")->index();
            $table->enum('penerima_tipe',['restoran','konsumen'])->index();
            $table->integer('pengirim_id')->index();
            $table->enum('pengirim_tipe',['restoran','admin','kurir'])->index();
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
        Schema::dropIfExists('riwayat_restopay');
    }
}
