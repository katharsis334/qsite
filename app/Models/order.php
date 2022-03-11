<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'name',
        'img1',
        'o_desc',
        'img2',
        'status',
        'cat',
        'comment',
        'user_id',
    ];
}
