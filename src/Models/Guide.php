<?php

namespace Hiradrayan\Guide\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    const TYPE_TOOLTIP = 1;
    const TYPE_SIDEBAR = 2;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected $fillable = [
        'type',
        'slug',
        'status',
        'content',
    ];
}
