<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'thumbnail',
        'status',
        'user_id',
        'published_at',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

}
