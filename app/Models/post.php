<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = ['$id'];
    use HasFactory;

    public function reply(){
        return $this->hasMany(reply::class);
    }
    
    public function comment(){
        return $this->hasMany(comment::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
