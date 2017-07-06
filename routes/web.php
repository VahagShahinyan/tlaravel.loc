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

Route::get('/',[ 'as'=>'home',function () {
    return view('welcome');
}]);



Route::match (['post','get'],'/token',function (){

    print_r($_POST);
    return view('token');

});

//Route::get('/article/{id}',[ 'as'=>'article',function ($id) {
//    echo  $id;
//}]);

/**
Route::get('/page', function () {
    return view('page');
});

Route::get('/page',function (){
    echo "Hello";
    echo "<pre>";

    print_r($_ENV);

    echo config('app.locale');
    echo Config::set('app.locale','ru');


    echo env('APP_ENV');
    echo "</pre>";



});


Route::match(['get','post'],'/comments',['uses'=>'CommentsController@show','as'=>'comments']);

Route::match(['post','get'],'/comments',function (){
    print_r($_POST);
});
Route::any('/comments',function (){
    print_r($_POST);
});

Route::post('/comments',function (){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

});



Route::get('/page/{cat}/{id?}',function ($cat,$id=''){
    echo $id."|".$cat;

})->where(['cat'=>'[A-Za-z]+','id'=>'[0-9]+']);

Route::group(['prefix'=>'admin'],function (){

Route::get('page/create',function (){
return redirect()->route('article',['id'=>25]);

});

Route::get('page/edit',function (){
    echo 'page/edit';
});

});

Route::get('/about/{id}','FirstController@show');


*/

//Route::get('/articles',['uses'=>'Core@getArticles','as'=>'articles']);
//
//Route::get('/article/{id}',['uses'=>'Core@getArticle','as'=>'article']);


Route::get('/',['as'=>'home','middleware'=>'auth','uses'=>'IndexController@show']);


Route::get('/articles',['uses'=>'Core@getArticles','as'=>'articles']);

Route::get('/article/{page}',['uses'=>'Core@getArticle','as'=>'article','middleware'=>'mymiddle']);


// list
//Route::resource('/pages','CoreResource',['only'=>['index','show']]);

//Route::Controller('/pages','PagesController');






