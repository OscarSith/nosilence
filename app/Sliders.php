<?php namespace Nosilence;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model {

	protected $fillable = [
		'modulo',
		'picture',
		'order'
	];

	public function scopeActives($q, $modulo = 'HOME')
	{
		return $q->where('modulo', $modulo)->where('estado', 'A')->orderBy('order')->get(['picture']);
	}

	public function scopeListAll($q, $modulo = 'HOME')
	{
		return $q->where('modulo', $modulo)->orderBy('order')->get(['id', 'estado', 'picture', 'order']);
	}

	public function scopeGetCount($q, $modulo = 'HOME')
	{
		return $q->where('modulo', $modulo)->count(['id']);
	}
}
