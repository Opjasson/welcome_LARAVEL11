<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory, Notifiable;
    // supaya dapat diisi secara bersama oleh user
    protected $fillable = ['title','author_id','slug','body'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
