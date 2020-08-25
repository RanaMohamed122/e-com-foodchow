<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('coming-soon');
});
*/
Route::get('/', 'WelcomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'profile@index')->name('profile');
Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/offers', 'OffersController@index')->name('offers');
Route::get('/contact-us', 'ContactController@index')->name('contact-us');
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/categories/products_found/{id}','CategoriesController@ViewProduct');

Route::get('/products_found/chefs_products/{id}','CategoriesController@ViewChefProduct');

Route::get('/chefs_products', function() {
    return view('chefs_products');
});

Route::match(['get','post'],'/cart', 'CategoriesController@ViewCart');
Route::match(['get', 'post'], '/admin','AdminController@login');
Route::get( '/reg',function () {
	return view('register');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//Route::group(['middleware' => ['auth']],function(){
	Route::get('/admin/dashboard','AdminController@dashboard');	
	Route::get('/admin/settings','AdminController@settings');
	Route::get('/admin/check-pwd','AdminController@chkPassword');
	Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');

	// Categories Routes (Admin)
	Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
	Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
	Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@deleteCategory');
	Route::get('/admin/view-categories','CategoryController@viewCategories');
	Route::get('/admin/delete-category-image/{id}','CategoryController@deleteCategoryImage');


	// Products Routes
	Route::match(['get','post'],'/admin/add-product','ProductsController@addProduct');
	Route::get('/admin/view-products','ProductsController@viewProducts');
	
	Route::match(['get','post'],'/admin/edit-product/{id}','ProductsController@editProduct');
	Route::get('/admin/delete-product/{id}','ProductsController@deleteProduct');
	Route::get('/admin/view-products','ProductsController@viewProducts');
	Route::get('/admin/delete-product-image/{id}','ProductsController@deleteProductImage');
	
	Route::match(['get', 'post'], '/admin/add-images/{id}','ProductsController@addImages');
	Route::get('/admin/delete-alt-image/{id}','ProductsController@deleteProductAltImage');

	//cart Routes
	Route::get('/chefs_products/cart/{id}','CategoriesController@AddtoCart');
	Route::get('/cart/delete-product/{id}','ProductsController@deleteCartProduct');
	//Route::get('/cart/update-quantity/{id}/{quantity}','CategoriesController@updateCartQuantity');
	Route::get('/cart/update-quantity/{id}/{quantity}','CategoriesController@updateCartQuantity2');

    // chefs Routes
	Route::match(['get','post'],'/admin/add-chef','ChefsController@addChef');
	Route::get('/admin/view-chef','ChefsController@viewChefs'); 
	Route::match(['get','post'],'/admin/edit-chef/{id}','ChefsController@editChef');   
	Route::get('/admin/delete-chef/{id}','ChefsController@deleteChef');

//});

	// users Routes
	Route::get('UserProfile','UserController@UserInfo');

	Route::match(['get','post'],'addUserInfo','UserController@addUserInfo');   

	Route::match(['get','post'], 'pay_cash' , 'CategoriesController@pay_cash');
	Route::match(['get','post'], 'add-order' , 'CategoriesController@confirm_order1');
	Route::match(['get','post'], 'add_review/{id}' , 'ReviewsController@create_review');

	
	//Route::get( '/pay_cash/confirm_order1' , 'CategoriesController@confirm_order1');
	



Route::get('/logout','AdminController@logout');



