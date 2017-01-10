<?php namespace Nosilence\Http\Controllers;

use Nosilence\Http\Requests;
use Nosilence\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;

class FacebookController extends Controller {

	private $fb;

	public function __construct(\SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb) {
		$this->fb = $fb;
	}

	public function index()
	{
		try {
			$loginUrl = $this->fb->getLoginUrl(['manage_pages']);
		} catch (FacebookSDKException $e) {
			// When validation fails or other local issues
			echo "When validation fails or other local issues";
			dd($e->getMessage());
		} catch (FacebookResponseException $e) {
			// When Graph returns an error
			echo "When Graph returns an error";
			dd($e->getMessage());
		}
		return view('facebook', compact('loginUrl'));
	}

	public function callback()
	{
		$token = '';
		if (\Session::has('fb_user_access_token')) {
			$token = session('fb_user_access_token');
		} else {
			try {
				$token = $this->fb->getAccessTokenFromRedirect();
			} catch (FacebookSDKException $e) {
				dd($e);
			}
		}

		if (! $token) {
			// Get the redirect helper
			$helper = $this->fb->getRedirectLoginHelper();

			if (! $helper->getError()) {
				abort(403, 'Unauthorized action.');
			}

			// User denied the request
			dd(
			    $helper->getError(),
			    $helper->getErrorCode(),
			    $helper->getErrorReason(),
			    $helper->getErrorDescription()
			);
		}

		if (!is_string($token) && ! $token->isLongLived()) {
			// OAuth 2.0 client handler
			$oauth_client = $this->fb->getOAuth2Client();

			// Extend the access token.
			try {
			    $token = $oauth_client->getLongLivedAccessToken($token);
			} catch (FacebookSDKException $e) {
			    dd($e->getMessage());
			}
		}

		$this->fb->setDefaultAccessToken($token);

		// Save for later
		session(['fb_user_access_token' => (string) $token]);

		// Get basic info on the user from Facebook.
		try {
			$response = $this->fb->get('/me/accounts');
			// Convert the response to a `Facebook/GraphNodes/GraphUser` collection
			//$facebook_user = $response->makeGraphEdge();
			session(['access_token' => $response->getDecodedBody()['data'][3]['access_token']]);
			session(['page_id' => $response->getDecodedBody()['data'][3]['id']]);
		} catch (FacebookSDKException $e) {
			dd($e);
		}

		return redirect()->route('facebook-wall');
	}

	public function wall()
	{
		$posts = [];
		$response = $this->fb->get(session('page_id') . '/feed?fields=message,full_picture,picture,created_time,from&limit=20', session('fb_user_access_token'));

		try {
			// $posts = $response->getGraphEdge();
			$posts = $response->getDecodedBody();
			$collection = collect($posts['data']);
			$filtered = $collection->filter(function($file) {
				$mesasge = isset($file['message']) ? $file['message'] : '';
				if ($mesasge !== '' && stripos($mesasge, '#nosilence')) {
					return $file;
				}
			});
			// dd($filtered);
		} catch (FacebookSDKException $e) {
			dd($e->getMessage());
		}

		return view('facebook-wall', compact('filtered'));
	}
}
