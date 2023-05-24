<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRestoranKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restoran_kategori', function (Blueprint $table) {

//            create table restoran kategori
            $table->increments('id');
            $table->integer('id_restoran')->unsigned()->index();
            $table->integer('id_kategori')->unsigned()->index();
            $table->timestamps();

//            set pk
//            $table->primary(['id_restoran','id_kategori']);





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
        Schema::dropIfExists('restoran_kategori');
    }
}
