<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('nombre');
			$table->string('reparto');
			$table->string('direccion');
			$table->string('duracion');
			$table->unsignedBigInteger('id_genero'); //Acá se declara el id de otra tabla como FK 
			$table->foreign('id_genero')->references('id')->on('genero'); //Acá se referencia el id declarado y a que tabla pertenece
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
        Schema::dropIfExists('peliculas');
    }
}
