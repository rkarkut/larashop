<?php

use Larashop\helpers\Categories;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function mainPage()
	{
		//		App::setLocale('en');
//		echo Lang::get('validation.empty_username');

		$products = Product::orderBy('created_at', 'desc')->take(10)->get();

		$mainProduct = $products[0];
		unset($products[0]);

		return View::make('home.main_page', array(
			'categories' => Categories::getCategories(),
			'products' => $products,
			'mainProduct' => $mainProduct
		));
	}

}
