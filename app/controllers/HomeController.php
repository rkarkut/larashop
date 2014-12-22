<?php

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

//		$categorize = Categorize::prepare(array(
//			'type'        => 'Product',
//			'title'       => 'Shop',
//			'description' => 'root node'
//		));
//
//		$categorize->makeRoot();

//		$hardware = Categorize::prepare(array(
//			'type'        => 'Product',
//			'title'       => 'Hardware',
//			'description' => ''
//		));
//
//		$software = Categorize::prepare(array(
//			'type'        => 'Product',
//			'title'       => 'Software',
//			'description' => ''
//		));
//
//		$parent = Categorize::getCategoryProvider()->findById(1);
//
//		$hardware->makeChildOf($parent);
//		$software->makeChildOf($parent);

		$categories = Categorize::getCategoryProvider()->root()->whereType('Product')->get();
		$categories_tree = Categorize::tree($categories)->toArray();

		//		App::setLocale('en');
//		echo Lang::get('validation.empty_username');

		return View::make('home.main_page', array('categories' => $categories_tree));
	}

}
