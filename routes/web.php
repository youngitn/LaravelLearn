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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user/{id}',function($id){
//     return 'user_id:'.$id;
// });

//Route::get('/news','NewsController@index');

Route::resource('news','Newscontroller');

Route::get('user/{id}', 'ShowProfile');

Route::get('/hello/{id}','NewsController@hello');

Route::get('/news/{id}','NewsController@show_id');

Route::get('/hello-world', function () {
    return view('hello_world');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/about_us/{name}', function ($name) {
    return view('about_us', ['name' => $name]);
});

Route::get('/inspire', 'InspiringController@inspire');

//
Route::get('/test', function(){
    return App\Post::all();
});

Route::get('/savetest', function(){
    $post = App\Post::find(1);
    $post->content = 'Laravel demo 6.0 day 11';
    $post->save();
    return $post;
});
Route::get('/addtest', function(){
    $post = new App\Post;
    $post->content = 'OOOOOOOK';
    $post->save();
    return $post;
});
