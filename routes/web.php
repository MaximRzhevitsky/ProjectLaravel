<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/posts', 'PostsController@allPosts')->name('posts-data');
Route::get('/posts/{post}', 'PostsController@onePost')->name('one-post');


Auth::routes();



//try {
//    DB::connection()->getPdo();
//    echo "Connected successfully to: " . DB::connection()->getDatabaseName();
//} catch (\Exception $e) {
//    die("Could not connect to the database. Please check your configuration. error:" . $e );
//}
//die;