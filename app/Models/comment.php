<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $guarded = ['$id'];

    public function post(){
        return $this->belongsTo(post::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function reply(){
        return $this->hasMany(reply::class);
    }
}
