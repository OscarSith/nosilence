<?php namespace Nosilence;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {

	protected $table = 'testimonials';

	protected $fillable = [
		'body',
		'autor'
	];

	public function scopePaginator($q)
	{
		return $q->latest()->paginate(2);
	}
	public function scopeListActives($q)
	{
		return $q->where('estado', 'A')->paginator();
	}

	public function rechazar($id)
	{
		$testimonio = $this->findOrFail($id);
		return $testimonio->delete();
	}
}
