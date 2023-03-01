<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Use_test;

class testact extends Model
{
    use HasFactory;

    protected $fillable = [
        'act_test1'
    ];

    public function use_test(){
        return $this->hasOne(Use_test::class,'id','user_id');
    }
}
