<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("home", ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});


Route::get('/blog', function () {
    return view('blog', ["title" => "Blog", "posts" => [
        [
            "id" => "1",
            "title" => "Judul artikel 1",
            "author" => "Azmi ghazy asyrof",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et corrupti earum repellendus aliquam dolore exercitationem odio nam, accusantium ipsa repudiandae maxime, dolorum modi officia velit!"
        ],
        [
            "id" => "2",
            "title" => "Judul artikel 2",
            "author" => "Azmi ghazy asyrof",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est placeat enim. Iusto mollitia obcaecati provident nisi tempora exercitationem optio at laboriosam, eius culpa asperiores ab aliquam quaerat consequatur minus?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, earum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab inventore ducimus quam commodi sapiente dignissimos? Voluptate maxime voluptatibus est repellat."
        ]
    ]]);
});

Route::get('/blog/{id}', function ($id) {
    $posts = [
        [
            "id" => "1",
            "title" => "Judul artikel 1",
            "author" => "Azmi ghazy asyrof",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et corrupti earum repellendus aliquam dolore exercitationem odio nam, accusantium ipsa repudiandae maxime, dolorum modi officia velit!"
        ],
        [
            "id" => "2",
            "title" => "Judul artikel 2",
            "author" => "Azmi ghazy asyrof",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est placeat enim. Iusto mollitia obcaecati provident nisi tempora exercitationem optio at laboriosam, eius culpa asperiores ab aliquam quaerat consequatur minus?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, earum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab inventore ducimus quam commodi sapiente dignissimos? Voluptate maxime voluptatibus est repellat."
        ]
        ];

        $post = Arr::first($posts, function ($post) use ($id) {
            return $post['id'] == $id;
        });

        return view('blogs',['title' => 'Single post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
