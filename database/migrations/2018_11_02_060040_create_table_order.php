<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_konsumen')->unsigned()->index();
            $table->integer('id_restoran')->unsigned()->index();
            $table->text("order_lat");
            $table->text("order_long");
            $table->text('order_alamat');
            $table->text('order_catatan')->nullable(true);
            $table->enum('order_metode_bayar',['epay','cash','transfer'])->index();
            $table->double('order_jarak_antar');
            $table->decimal('order_biaya_anatar',10,2);
            $table->enum('order_status',['proses','batal','selesai','pengantaran','antrian','menunggu'])->default("proses")->index()->change();
            $table->timestamps();


            //            set FK id konsumen
            $table->foreign('id_konsumen')
                ->references('id')
                ->on('konsumen')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            //            set FK  restoran
            $table->foreign('id_restoran')
                ->references('id')
                ->on('restoran')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
