<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     /*Para hacer migraciones, se usa el siguiente comando:
	 php artisan make:migration create_nombreTabla_table
	 
	 Esta migración creará por defecto la tabla con el 'id' como número autoincremental.
	 */
    public function up()
    {
        Schema::create('generos', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('genero');
            $table->timestamps();
       

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generos');
    }
}
