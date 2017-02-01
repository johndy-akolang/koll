<?php

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// route to process the form
Route::post('login', ['as' => 'user-login', 'uses' => 'LoginController@doLogin']);

// register user
Route::get('register', ['as' => 'user-register', 'uses' => 'RegisterController@register']);
Route::post('register', 'RegisterController@postRegister');

// home route
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

// item routes
Route::get('/search', ['as' => 'search', 'uses' => 'ItemController@getSearch']);    // search item
Route::get('/item/{slug}',['as' => 'view-item', 'uses' => 'ItemController@show']);  // show specific item

// requires logged-in user
Route::group(['middleware' => ['auth']], function() {
  Route::get('/login-success', ['as' => 'login-success', 'uses' => 'LoginController@loginsuccess']);         // log-in sucess
  Route::get('/logout', ['as' => 'user-logout', 'uses' => 'LoginController@doLogout']);                      // route to logout

  // item routes
	Route::get('/account/items', ['as' => 'user-items', 'uses' => 'ItemController@index']);                    // list of user ads
  Route::post('/account/items/create', ['as' => 'user-items-create', 'uses' => 'ItemController@store']);     // save new item
	Route::get('/account/items/create', ['as' => 'user-items-create', 'uses' => 'ItemController@create']);     // show create form
	Route::get('/account/items/{slug}/edit', ['as' => 'user-items-edit', 'uses' => 'ItemController@edit']);    // show edit item form
	Route::post('/account/items/{slug}/edit', ['as' => 'user-items-edit', 'uses' => 'ItemController@update']); // update post

	// item-comment route
	Route::post('/comments/add', 'CommentsController@store');      // save item comment

	// user routes
	Route::get('account/edit/{id}', 'AccountController@edit');
	Route::post('account/edit/{id}', 'AccountController@update');
	//Route::resource('account', 'AccountController');

  // Route::get('myallitems', 'AccountController@user_posts_all');
});

// user profile
Route::get('/account/user/{id}', 'AccountController@profile');



// send email message for inquiry item
Route::post('item/sendmail', 'ItemController@getMail');


/*Route::get('account/{id}', 'AccountController@user')->where('id', '[0-9]+');*/
/* koll about */
Route::get('about', 'AboutController@index');
Route::get('about/privacy', 'AboutController@privacy');
Route::get('about/terms', 'AboutController@terms');

// route to show the login form
Route::get('login', 'LoginController@showLogin');


/*Route::resource('item', 'ItemController');*/

/* this message is temporally disabled */
// Route::get('message/inbox', 'MessageController@inbox');
// Route::get('message/viewmessage', 'MessageController@viewmessage');
// Route::get('message/sent', 'MessageController@sent');

/* legal terms disabled*/
// Route::get('legal/terms', 'LegalController@terms');
// Route::get('legal/privacy', 'LegalController@privacy');

/* sitemap */
Route::get('/sitemap', function() {
	$file = public_path(). "/koll_sitemap.xml";
	//check if the file exists
	if (file_exists($file)) {
		//read the file into a string
		$content = file_get_contents($file);
		// create a laravel response using the content string, an http response code of 200(OK),
		// and an array of html headers including the pdf contet type
		return Response::make($content, 200, array('content-type'=>'application/xml'));
	}
});
