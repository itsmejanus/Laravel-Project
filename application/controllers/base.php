<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

	public function __construct() {
		if (Sentry::check())
		{
			$user = Sentry::user();
			if ($user)
			{
		   		if (Sentry::user())
		   		{
		   			View::share('alias',$user->get('metadata.alias'));
		   		}			
			}			
		}
	}



}