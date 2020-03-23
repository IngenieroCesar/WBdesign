<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//------------  Rutas simples  -----------//

Route::get('/', [
		'uses' => 'ViewsController@index_web',
		'as' => 'welcome'
	]);

Route::get('/Demo', [
		'uses' => 'ViewsController@demo_plataform',
		'as' => 'demo'
	]);


// Vista para poder enviar los datos a la vista de la pagina!
Route::group(['prefix' => 'imagenes'], function(){

	Route::get('/', [
		'uses' => 'ImagesController@index_web',
		'as' => 'welcome'
	]);

});


//------------  Administrador  -----------//
Route::group(['prefix' => 'admin', 'middleware'=>'auth' ], function(){

	Route::get('/',['' => 'WBdesign@index','as' => 'admin.index', function () {
 	   return view('admin.index');
	}]);

	Route::resource('actividades','ActividadesController');
		Route::get('actividades/{id}/destroy', [
			'uses' => 'ActividadesController@destroy',
			'as' => 'admin.actividades.destroy'
		]);

		Route::get('actividades', [
			'uses' => 'ActividadesController@index',
			'as' => 'admin.actividades.index'
		]);
		//rutas para eventos FullCalendar
		Route::POST('actividades/agregarEvento', array (
			'as' => 'agregarActividad',
			'uses' => 'ActividadesController@store'
		));

		Route::get('actividades/cargaEventos{id?}','ActividadesController@show');

		Route::post('actividades/actualizaEventos','ActividadesController@update');

		Route::post('actividades/eliminaEvento','ActividadesController@destroy');


		//end rutas para eventos FullCalendar
	Route::resource('articles','ArticlesController');
		Route::get('articless/{id}/destroy', [
			'uses' => 'ArticlesController@destroy',
			'as' => 'admin.articles.destroy'
		]);
		Route::get('articles/{id}/view', [
			'uses' => 'ArticlesController@view',
			'as' => 'admin.articles.view'
		]);

	Route::resource('clients','ClientsController');
	Route::get('clients/{id}/destroy', [
		'uses' => 'ClientsController@destroy',
		'as' => 'admin.clients.destroy'
	]);

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'
	]);

	Route::get('images', [
		'uses' => 'ImagesController@index',
		'as' => 'admin.images.index'
	]);

	Route::resource('mails','MailsController');
	Route::get('mails/{id}/destroy', [
		'uses' => 'MailsController@destroy',
		'as' => 'admin.mails.destroy'
	]);

	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as' => 'admin.tags.destroy'
	]);

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
	]);


 //------------- Contabilidad------------------//



 //------------  Administrador Web  -----------//

	Route::group(['prefix' => 'myweb'], function(){
			//Ruta del index para las galerias!!
			Route::resource('galeries','GaleriesController');
				Route::get('galeries/{id}/destroy', [
				'uses' => 'GaleriesController@destroy',
				'as' => 'admin.myweb.galeries.destroy'
				]);
			//Ruta para el index de los contenidos!!
			Route::resource('contents','ContentsController');
				Route::get('contents/{id}/destroy', [
				'uses' => 'ContentsController@destroy',
				'as' => 'admin.myweb.contents.destroy'
				]);

	});
//----end admin---//

/*
	Route::resource('e-commerce','E-CommerceController');
	Route::get('tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as' => 'admin.tags.destroy'
	]);

*/

});

//---Login- logout user---//
Route::get('admin/auth/login', [
	'uses' => 'Auth\AuthController@getLogin',
	'as' => 'admin.auth.login'
	]);
Route::post('admin/auth/login', [
	'uses' => 'Auth\AuthController@postLogin',
	'as' => 'admin.auth.login'
	]);
Route::get('admin/auth/logout', [
	'uses' => 'Auth\AuthController@getLogout',
	'as' => 'admin.auth.logout'
	]);
