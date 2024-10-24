<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view("home", ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});


Route::get('/blog', function () {
    return view('blog', ["title" => "Blog", "posts" => Post::all()]);
});

Route::get('/blog/{post}', function (Post $post) {
        // $post = Post::find($id);
        
        return view('blogs',['title' => 'Single post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
