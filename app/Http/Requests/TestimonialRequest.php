<?php namespace Nosilence\Http\Requests;

use Nosilence\Http\Requests\Request;

class TestimonialRequest extends Request {

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
		return [
			'autor'=> 'required|max:100',
			'body' => 'required',
		];
	}

}
