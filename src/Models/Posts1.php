<?php

namespace Alexey\Posts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

}
