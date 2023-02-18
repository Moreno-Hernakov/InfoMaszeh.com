<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    use HasFactory;

    protected $guarded = ['$id'];

    public function post(){
        return $this->belongsTo(post::class);
    }

    public function comment(){
        return $this->belongsTo(comment::class);
    }

}
