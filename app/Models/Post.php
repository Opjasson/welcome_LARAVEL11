<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
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
    }

    public static function find($id){
        $posts = Arr::first(static::all(), function ($post) use ($id) {
            return $post['id'] == $id;
        });
        if(! $posts){
            abort(404);
        }
        return $posts;
    }
}
?>