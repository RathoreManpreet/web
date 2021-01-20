<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
Route::get( '/', [HomeController::class, 'home'])->name('home');

Route::get( '/service', [HomeController::class, 'service'])->name('service');

Route::get('/career', [HomeController::class, 'career']);

Route::get('/director-message',[HomeController::class, 'director']);

Route::get('/galleries', [HomeController::class,'gallery'])->name('redx-gallery');

Route::get('/location',[HomeController::class,'location']);

Route::get('/group-of-company',[HomeController::class,'goc']);

Route::get( '/about', [HomeController::class,'about'])->name('about');

Route::get( '/contact', [HomeController::class, 'contact'])->name('contact');

Route::get( 'redx-specific/{slug?}', [HomeController::class, 'redxSpecific'])->name('redx-specific');

Route::get( '/quality', [HomeController::class, 'quality'])->name('quality');


Route::get( '/projects/{project_name?}', [HomeController::class, 'project'])->name('project');

// Route::get('/redx-specific-2', function(){
//     return view('redx-specific2');
// });

// Route::get('/redx-specific-3', function(){
//     return view('redx-specific3');
// });

Route::get( '/products/{category_slug?}/{product_slug?}', [HomeController::class, 'product'])->name('product');
// Route::get('test', function(){
//     return view('admin.layout');
// });
Route::get('test', function(){
    return view('test');
});


Route::group(['middleware' => [], 'as' => 'admin.', 'prefix' => 'admin'], function () {

    Route::get('login', ['middleware' => ['user-active'], 'as' => 'login.form', 'uses' => 'App\Http\Controllers\AdminController@showLogin']);
    Route::post('signin', ['middleware' => [], 'as' => 'signin', 'uses' => 'App\Http\Controllers\AdminController@signInAction']);

    Route::group(['middleware' => ['user-not-active']], function () {
        Route::get('logout', ['as' => 'logout', 'uses' => 'App\Http\Controllers\AdminController@logout']);
        Route::get('dashboard', ['middleware' => [], 'as' => 'dashboard', 'uses' => 'App\Http\Controllers\AdminController@showDashboard']);
        Route::get('products', ['middleware' => [], 'as' => 'product', 'uses' => 'App\Http\Controllers\ProductController@showProducts']);
        Route::get('product/add', ['middleware' => [], 'as' => 'add.product', 'uses' => 'App\Http\Controllers\ProductController@showAddProducts']);
        Route::post('product/add', ['middleware' => [], 'as' => 'add.product.action', 'uses' => 'App\Http\Controllers\ProductController@addProduct']);
        Route::get('product/edit/{product_id}', ['middleware' => [], 'as' => 'edit.product', 'uses' => 'App\Http\Controllers\ProductController@showEditProducts']);
        Route::post('product/update/{product_id}', ['middleware' => [], 'as' => 'update.product', 'uses' => 'App\Http\Controllers\ProductController@updateProduct']);
        Route::get('delete/product/image/{image_id}', ['middleware' => [], 'as' => 'delete.product.image', 'uses' => 'App\Http\Controllers\ProductController@deleteProductImage']);
        Route::get('delete/product/{product_id}', ['middleware' => [], 'as' => 'delete.product', 'uses' => 'App\Http\Controllers\ProductController@deleteProduct']);

        Route::get('categories', ['middleware' => [], 'as' => 'category', 'uses' => 'App\Http\Controllers\CategoryController@showCategories']);
        Route::get('category/add', ['middleware' => [], 'as' => 'add.category', 'uses' => 'App\Http\Controllers\CategoryController@showAddCategory']);
        Route::post('category/add', ['middleware' => [], 'as' => 'add.category.action', 'uses' => 'App\Http\Controllers\CategoryController@addCategory']);
        Route::get('category/edit/{category_id}', ['middleware' => [], 'as' => 'edit.category', 'uses' => 'App\Http\Controllers\CategoryController@showEditCategory']);
        Route::post('category/update/{category_id}', ['middleware' => [], 'as' => 'update.category', 'uses' => 'App\Http\Controllers\CategoryController@updateCategory']);

        Route::get('projects', ['middleware' => [], 'as' => 'project', 'uses' => 'App\Http\Controllers\ProjectController@showProjects']);
        Route::get('project/add', ['middleware' => [], 'as' => 'add.project', 'uses' => 'App\Http\Controllers\ProjectController@showAddProjects']);
        Route::post('project/add', ['middleware' => [], 'as' => 'add.project.action', 'uses' => 'App\Http\Controllers\ProjectController@addProject']);
        Route::get('project/edit/{product_id}', ['middleware' => [], 'as' => 'edit.project', 'uses' => 'App\Http\Controllers\ProjectController@showEditProjects']);
        Route::post('project/update/{project_id}', ['middleware' => [], 'as' => 'update.project', 'uses' => 'App\Http\Controllers\ProjectController@updateProject']);
        Route::get('delete/project/image/{image_id}', ['middleware' => [], 'as' => 'delete.project.image', 'uses' => 'App\Http\Controllers\ProjectController@deleteProjectImage']);
        Route::get('delete/project/{project_id}', ['middleware' => [], 'as' => 'delete.project', 'uses' => 'App\Http\Controllers\ProjectController@deleteProject']);

        Route::get('gallery', ['middleware' => [], 'as' => 'gallery', 'uses' => 'App\Http\Controllers\GalleryController@showGallery']);
        Route::post('add/gallery', ['middleware' => [], 'as' => 'add.gallery', 'uses' => 'App\Http\Controllers\GalleryController@addGallery']);
        Route::post('delete/gallery', ['middleware' => [], 'as' => 'delete.gallery', 'uses' => 'App\Http\Controllers\GalleryController@deleteGallery']);

        Route::get('redx-specific', ['middleware' => [], 'as' => 'redx-specific', 'uses' => 'App\Http\Controllers\RedxSpecificController@showRedxSpecific']);
        Route::get('redx-specific/add', ['middleware' => [], 'as' => 'add.redx-specific', 'uses' => 'App\Http\Controllers\RedxSpecificController@showAddRedxSpecific']);
        Route::post('redx-specific/add', ['middleware' => [], 'as' => 'add.redx-specific.action', 'uses' => 'App\Http\Controllers\RedxSpecificController@addRedxSpecific']);
        Route::get('redx-specific/edit/{id}', ['middleware' => [], 'as' => 'edit.redx-specific', 'uses' => 'App\Http\Controllers\RedxSpecificController@showEditRedxSpecific']);
        Route::get('delete/redx-specific/{id}', ['middleware' => [], 'as' => 'delete.redx-specific', 'uses' => 'App\Http\Controllers\RedxSpecificController@deleteRedexSpecific']);
        Route::post('redx-specific/update/{id}', ['middleware' => [], 'as' => 'update.redx-specific', 'uses' => 'App\Http\Controllers\RedxSpecificController@updateRedexSpecific']);
       
        /**page */
        Route::get('home', ['middleware' => [], 'as' => 'home', 'uses' => 'App\Http\Controllers\PageController@homePage']);
        Route::get('about', ['middleware' => [], 'as' => 'about', 'uses' => 'App\Http\Controllers\PageController@aboutPage']);
        Route::get('page/{page?}', ['middleware' => [], 'as' => 'page', 'uses' => 'App\Http\Controllers\PageController@getPage']);
        Route::post('service', ['middleware' => [], 'as' => 'update.service', 'uses' => 'App\Http\Controllers\PageController@updateService']);
        Route::get('delete/page/image/{image_id}', ['middleware' => [], 'as' => 'delete.page.image', 'uses' => 'App\Http\Controllers\PageController@deletePageImage']);
        Route::post('quality', ['middleware' => [], 'as' => 'update.quality', 'uses' => 'App\Http\Controllers\PageController@updateQuality']);
        Route::post('about', ['middleware' => [], 'as' => 'update.about', 'uses' => 'App\Http\Controllers\PageController@updateAbout']);
    });
});
