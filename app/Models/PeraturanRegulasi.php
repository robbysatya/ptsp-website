<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeraturanRegulasi extends Model
{
    protected $fillable = [
        'name',
        'file',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
