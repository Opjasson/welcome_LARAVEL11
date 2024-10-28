<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view("home", ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});


Route::get('/blog', function () {
    // $post = Post::with(['author','category'])->latest()->get();
    // dump(request('search'));
    
    return view('blog', ["title" => "Blog", "posts" => Post::filter(request(['search','category','author']))->latest()->get()]);
});

Route::get('/blog/{post:slug}', function (Post $post) {
        // $post = Post::find($id);
        return view('blogs',['title' => 'Single post', 'post' => $post]);
});

Route::get('/author/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category','author');
    return view('blog',['title' =>count($user->posts) . ' Articels by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category','author');
    return view('blog',['title' =>'Articels in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
