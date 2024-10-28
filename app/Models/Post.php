<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory, Notifiable;
    // supaya dapat diisi secara bersama oleh user
    protected $fillable = ['title','author_id','slug','body'];

    protected $with = ['author','category'];

    // relasi antar model
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            $query->where('title', 'like', '%' . request('search') . '%');
        });

        $query->when(
            $filters['category'] ?? false,
            function($query, $category){
                $query->whereHas('category', fn($query) => $query->where('slug', $category));
            }
        );

        $query->when(
            $filters['author'] ?? false,
            function($query, $author){
                $query->whereHas('author', fn($query) => $query->where('username', $author));
            }
        );
        
    }
}
