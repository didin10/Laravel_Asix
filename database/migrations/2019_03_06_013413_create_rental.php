<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRental extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_film', function(Blueprint $table){
            $table->increments('id');
            $table->string('judul');
            $table->string('sinopsis');
            $table->string('genre');
            $table->integer('tahun_film');
            $table->integer('jumlah_cd');
            $table->integer('dipinjam');
            $table->integer('tersedia');
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
        Schema::dropIfExists('rental_film');
    }
}
