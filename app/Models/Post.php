<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

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

    protected $casts = [
        'status' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function getFormattedDate(): string
    {
        if ($this->published_at instanceof \DateTimeInterface) {
            return $this->published_at->isoFormat('DD/MM/Y');
        }
        return '';
    }
    /**
     * Get the URL for the post thumbnail.
     *
     * @return string
     */
    // public function getThumbnail()
    // {
    //     if (str_starts_with($this->thumbnail, 'https://')) {
    //         return $this->thumbnail;
    //     }
    //     return asset('storage/'.$this->thumbnail()); // Default thumbnail if none is set
    // }

    /**
     * Get the excerpt of the post content.
     *
     * @param int $length
     * @return string
     */
    // This method returns a trimmed version of the post content, limited to a specified length.
    // It uses the Str::limit method to ensure the content does not exceed the specified length
    // and strips any HTML tags to return plain text.
    // The default length is set to 150 characters, but it can be adjusted by passing a different value.
    // This is useful for displaying a brief summary or preview of the post content
    // without overwhelming the reader with too much text.
    // Example usage: $post->getExcerpt(100) will return the first 100 characters of the post content,
    public function getExcerpt(int $length = 150): string
    {
        return Str::limit(strip_tags($this->content), $length); 
    }

}
