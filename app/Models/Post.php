<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    // Ni 'Eager Loading by Default' add code ni je untuk solve problem N + 1, kalau nk buat manual blh set 1 by 1 dkt file route web.php
    // Kalau nk auto, letak code ni je
    protected $with = ['author', 'category']; // Automatically loads the author and category relationships with the model to improve query performance.

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
