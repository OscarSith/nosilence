<?php namespace Nosilence\Http\Controllers;

use Nosilence\Http\Requests\TestimonialRequest;
use Nosilence\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
use Nosilence\Testimonial;

class TestimonialController extends Controller {

	public function index()
	{
		$testimonials = Testimonial::paginator();
		return view('admin.testimonial', compact('testimonials'));
	}

	public function store(TestimonialRequest $request)
	{
		Testimonial::create($request->all());
		return redirect()->back()->with('success', 'Testimonio enviado, Gracias!');
	}

	public function update()
	{
		$data = \Request::only('id');
		$Testimonial = Testimonial::findOrFail($data['id']);
		$Testimonial->estado = 'A';
		$Testimonial->save();

		return redirect()->back()->with('success', 'Testimonio aceptado');
	}

	public function delete()
	{
		$data = \Request::only('id');
		$Testimonial = new Testimonial();
		$Testimonial->rechazar($data['id']);

		return redirect()->back()->with('success', 'Testimonio Eliminado');
	}
}
