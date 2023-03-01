<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testtheory extends Model
{
    use HasFactory;

    protected $fillable = [
        'theory_test1',
        'theory_test2',
        'theory_test3'
    ];
}
