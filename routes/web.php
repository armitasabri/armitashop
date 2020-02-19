<?php


use App\Models\users;
use App\Models\roles;


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

// Route::get('/', function () {
//     return view('welcome');
  
// });



Route::get('/', 'frontController@index')->name('home');
Route::get('/category', 'productController@index')->name('category');
Route::get('/singleproduct', 'productController@productview')->name('singleproduct');
Route::get('/product_checkout', 'productController@productcheckout')->name('productcheckout');
Route::get('/shoppingcart', 'ShoppingcartController@index')->name('cart');
Route::get('/addtoshoppingcart/{id}', 'ShoppingcartController@addkala')->name('addcart');
Route::get('/confirmation', 'InvoiceController@index')->name('faktor');
// Route::get('/login', 'LoginController@index')->name('login');
// Route::get('/login', 'Auth\LoginController@checkusers');

Route::get('/register', 'RegisterController@index')->name('register');
Route::get('/order_tracking', 'OrdertrackingController@index')->name('tracking');
Route::get('/contact_with_us', 'frontcontroller@contact')->name('contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home1');



Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    // Route::get('checkadmin/{id}', 'UserController');
    Route::get('alluserdatatabels', 'UserController@alluserdatatabels')->name('users.alluserdatatabels');
    Route::resource('/users', 'UserController');
    


 });

//  Route::get('checkadmin/{id}', 'Admin\UserController');

Route::get('myuser/attach', function () {

    $user = Users::findorfail(22);
    $role = Roles::find(2);
    // var_dump($user);die;
  $user->Roles()->attach($role->id, ['created_at' => '2020-02-10 17:46:45', 'updated_at' => '2020-02-10 17:46:45']);
});

// Route::get('user/roles/detach', function () {

//     $user = Users::find(22);
//     $role=Roles::find(4);
  
//   $user->Roles()->detach($role->id);

// });

Route::get('/home2', 'HomeController@index2')->name('home2')->middleware('roless');

Route::get('/nopermission', 'HomeController@accessdenied');


/////////////////////admin product//////////////////////////////
Route::resource('/kalatables', 'Admin\ProductController');
Route::get('/updatekalatable/{id}', 'Admin\ProductController@updatekala');
Route::post('updatekalatable/updated', 'Admin\ProductController@myupdate')->name('updated');
Route::get('/deletekala/{id}', 'Admin\ProductController@destroy');
Route::get('addkalatable', 'Admin\ProductController@addkala');



////////////////////////////admin users/////////////////////////////
Route::resource('/myuserstable', 'Admin\UserController');
Route::get('/deleteuser/{id}', 'Admin\UserController@destroy');
Route::post('/gotoupdateform/update', 'Admin\UserController@updateme');
Route::get('/gotoupdateform/{id}', 'Admin\UserController@edit');


//////////////////////////////admin comment/////////////////////////////////
Route::resource('/commenttable', 'Admin\CommentController');
Route::get('/deletecomment/{id}', 'Admin\CommentController@destroy');
Route::get('/gotocommentform/{id}', 'Admin\CommentController@edit');
Route::post('/gotocommentform/update', 'Admin\CommentController@updatecomment');

