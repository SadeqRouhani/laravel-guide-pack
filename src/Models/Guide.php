<?php

namespace Hiradrayan\Guide\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    const TYPE_TOOLTIP = 1;
    const TYPE_SIDEBAR = 2;
    protected $fillable = [
        'type',
        'slug',
        'status',
        'content',
    ];
}
