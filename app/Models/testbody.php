<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testbody extends Model
{
    use HasFactory;

    protected $fillable = [
        'body_test1',
        'body_test2',
        'body_test3',
        'body_test4'
    ];
}
