<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alltestcar extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $table = 'alltestcars';
    public $timestamps = true;
}
