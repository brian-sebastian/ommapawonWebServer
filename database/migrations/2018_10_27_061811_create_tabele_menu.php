<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabeleMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_restoran')->unsigned();
            $table->integer('id_kategori')->unsigned();
            $table->string('nama_makanan')->index();
            $table->string('image');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->boolean('menu_ketersediaan')->default(false)->index();
            $table->double('menu_discount')->nullable(true);
            $table->boolean('menu_delete')->default(false);
            $table->timestamps();



            //            set FK kategori restoran
            $table->foreign('id_restoran')
                ->references('id')
                ->on('restoran')
                ->onDelete('cascade')
                ->onUpdate('cascade');

//            set FK kategori restoran
            $table->foreign('id_kategori')
                ->references('id')
                ->on('kategori')
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
        Schema::dropIfExists('menu');
    }
}
