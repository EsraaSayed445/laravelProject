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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts', function () {
    $posts = [
        [
            "id" => 1,
            "name" => "esraa",
            "body" => "hi esraa",
            "title" => "title esraa"
        ],
        [
            "id" => 2,
            "name" => "Ahmed",
            "body" => "hi Ahmed",
            "title" => "title Ahmed"
        ],
        [
            "id" => 3,
            "name" => "Mohamed",
            "body" => "hi Mohamed",
            "title" => "title Mohamed"
        ]
    ];

  return view('posts.index',["posts"=>$posts]);
});

Route::get('/show/{id}',function($id){
    $post=[
        "id" => $id,
        "name" => "Mohamed",
        "body" => "hi Mohamed",
        "title" => "title Mohamed"
    ];
    return view('posts.show',$post);
})->where('id','[0-9]+');

Route::get('/edit/{id}',function($id){
    $post=[
        "id" => $id,
        "name" => "Ahmed",
        "body" => "hi,Ahmed",
        "title" => "title,Ahmed"
    ];
    return view('posts.edit',$post);
});

Route::post('update',function(){
    return "update";
});

Route::get('/create',function(){
    return view('posts.create');
});

Route::post('store',function(){
    return "store";
});
