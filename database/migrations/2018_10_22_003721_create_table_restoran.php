<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRestoran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restoran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('restoran_nama')->index();
            $table->string('restoran_phone',14)->unique()->index();
            $table->string('restoran_email',200);
            $table->text('restoran_alamat');
            $table->text('restoran_latitude')->nullable(true);
            $table->text('restoran_longitude')->nullable(true);
            $table->text('restoran_deskripsi');
            $table->boolean('restoran_oprasional')->default(false)->index();
            $table->string('restoran_foto');
            $table->string('restoran_pemilik_nama',200);
            $table->string('restoran_pemilik_email',200);
            $table->string('restoran_pemilik_phone',14)->index();
            $table->decimal('restoran_balance',10,2)->default("0");
            $table->enum('restoran_delivery',['gratis','flat'])->index();
            $table->decimal('restoran_delivery_tarif',10,2)->default("0");
            $table->integer('restoran_delivery_jarak');
            $table->decimal('restoran_delivery_minimum',10,2)->default("0");
            $table->enum('restoran_status',['aktif','non_aktif','review','blacklist','tolak'])->default("review")->index();
            $table->text('token')->nullable(true);
            $table->timestamps();
        });


//        set FK di kolom menu_restoran_id di table menu
//        Schema::table('menu',function (Blueprint $table){
//            $table->foreign('menu_restoran_id')
//                ->references('id')
//                ->on('restoran')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Drop FK di kolom menu_restoran_id pada table menu
//        Schema::table('menu',function (Blueprint $table){
//            $table->dropForeign('menu_restoran_id_foreign');
//        });

        Schema::dropIfExists('restoran');
    }
}
