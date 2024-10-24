<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model // langsung terhubung dengan tabel posts
{
    protected $fillable = ['title','author','body'];
}
?>