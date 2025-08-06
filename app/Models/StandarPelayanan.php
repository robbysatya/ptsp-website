<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StandarPelayanan extends Model
{
    public mixed $file = [
        'file'
    ];
    protected $fillable = [
        'name',
        'file',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
