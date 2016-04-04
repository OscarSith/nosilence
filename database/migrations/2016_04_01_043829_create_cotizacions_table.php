<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cotizacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('seccion', 1);
			$table->string('nombre_completo');
			$table->string('correo');
			$table->string('telefono');
			$table->string('colegio');
			$table->string('posibles_fechas');
			$table->integer('nro_participantes');
			$table->char('participacion_padres', 2);
			$table->date('fecha');
			$table->string('hora');
			$table->string('direccion');

			$table->integer('nro_adultos_participantes');
			$table->string('posible_tematica');
			$table->char('locacion_evento', 2);
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
		Schema::drop('cotizacions');
	}

}
