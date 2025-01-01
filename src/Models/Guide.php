<?php

namespace Hiradrayan\Guide\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'slug',
        'status',
        'content',
    ];
}
