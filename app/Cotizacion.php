<?php namespace Nosilence;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model {

	protected $fillable = [
		'section',
		'nombre_completo',
		'correo',
		'telefono',
		'colegio',
		'nro_participantes',
		'posibles_fechas',
		'participacion_padres',
		'fecha',
		'hora',
		'direccion',
		'nro_adultos_participantes',
		'posible_tematica',
		'locacion_evento'
	];
}
