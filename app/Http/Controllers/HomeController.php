<?php namespace Nosilence\Http\Controllers;

use Nosilence\Sliders;
use Request;
use Image;
use File;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sliders = Sliders::listAll();
		return view('admin.home', compact('sliders'));
	}

	public function upload()
	{
		$img = Request::file('picture');
		$picture = str_random(5) . '_' . $img->getClientOriginalName();
		$order = (Sliders::getCount(Request::input('modulo'))) + 1;

		Sliders::create(['modulo' => Request::input('modulo'), 'picture' => $picture, 'order' => $order]);
		Image::make($img->getRealPath())->save('images/slider/' . $picture);
		return redirect()->back();
	}

	public function changeStatusPicture($id)
	{
		$slider = Sliders::find($id);
		$slider->estado = Request::input('estado');
		$slider->save();

		return response()->json(['estado' => Request::input('estado')]);
	}

	public function deletePicture($id)
	{
		Sliders::destroy($id);
		File::delete('images/slider/' . Request::input('picture'));
		return response()->json([]);
	}

	public function changeOrder()
	{
		$params = Request::input('order');
		foreach ($params as $key) {
			$slider = Sliders::find($key['id']);
			$slider->order = $key['order'];
			$slider->save();
		}

		return response()->json([]);
	}
}
