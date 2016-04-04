<?php namespace Nosilence\Http\Requests;

use Nosilence\Http\Requests\Request;

class CotizacionRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$sameRules = [
			'seccion' => 'required|in:1,2',
			'nombre_completo' => 'required',
			'correo' => 'required|email',
			'telefono' => 'required',
			'posibles_fechas' => 'required',
			'nro_participantes' => 'required|numeric|min:1',
		];
		if ($this->has('seccion') && $this->input('seccion') == 1) {
			return array_merge($sameRules, [
				'colegio' => 'required',
				'participacion_padres' => 'required|in:SI,NO',
				'fecha' => 'required|date',
				'hora' => 'required',
				'direccion' => 'required'
			]);
		} else {
			return array_merge($sameRules, [
				'nro_adultos_participantes' => 'required|numeric|min:1',
				'posible_tematica' => 'required',
				'locacion_evento' => 'required|in:SI,NO'
			]);
		}
	}

}
