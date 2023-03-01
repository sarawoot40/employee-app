<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Use_test extends Model
{
     use HasFactory;
     use softDeletes;

    protected $fillable = [
        'user_fname',
        'user_lname',
        'body_test1',
        'body_test2',
        'body_test3',
        'body_test4',
        'theory_test1',
        'theory_test2',
        'theory_test3',
        'act_test1'
    ];
    public $primaryKey = 'id';
    protected $table = 'use_tests';
    public $timestamps = true;
}
