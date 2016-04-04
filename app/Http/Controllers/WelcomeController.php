<?php namespace Nosilence\Http\Controllers;

use Nosilence\Testimonial;
use Nosilence\Sliders;
use Nosilence\Cotizacion;
use Nosilence\Http\Requests\CotizacionRequest;
use Request;

class WelcomeController extends Controller {
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sliders = Sliders::actives();
		return view('welcome', compact('sliders'));
	}

	public function quincianero()
	{
		return view('eventos');
	}

	public function party()
	{
		return view('fiesta_promo');
	}

	public function nosotros()
	{
		return view('nosotros');
	}

	public function contacto()
	{
		return view('contact');
	}

	public function sendMail()
	{
		$data = \Request::all();
		\Mail::send('emails.contact', $data, function($message) use ($data)
		{
			$message->from($data['email'], $data['nombre']);

			$message->to('diego@nosilenceperu.com', 'Nosilenceperu')
					->to('eventos@nosilenceperu.com', 'Nosilenceperu');

		});

		return \Response::json(['load' => true, 'success_message' => 'Mensaje enviado, en breve un representante se comunicará contigo.']);
	}

	public function services()
	{
		return view('services');
	}

	public function cotizacion()
	{
		return view('cotizacion');
	}

	public function testimonial()
	{
		$testimonials = Testimonial::listActives();
		return view('testimoniales', compact('testimonials'));
	}

	public function sendCotizacion(CotizacionRequest $request)
	{
		$params = $request->all();
		Cotizacion::create($params);

		\Mail::send('emails.cotizacion', $params, function($message) use ($params)
		{
			$message->to(env('TO_ADDRESS'), env('TO_NAME'))->subject('Titulo para pruebas de envio');
		});

		return redirect()->back()->with('success_message', 'Cotizacion enviada, en breve un representante se comunicará contigo.');
	}
}
