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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',['as'=>'home',function(){
    return view('welcome');
}]);
Route::get('/about/{id}','FirstController@show');
Route::get('/articles',['uses'=>'Admin\Core@getArticles','as'=>'articles']);

Route::get('/article/{page}',['uses'=>'Admin\Core@getArticle','as'=>'article','middleware'=>'mymiddle']);


Route::resource('/pages','Admin\CoreResource');
Route::controller('/pages','PagesController');



Route::auth();

Route::get('/page', 'PagesController@page');
