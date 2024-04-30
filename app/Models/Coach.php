<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{

    protected $fillable = [
        
    'users_id',

    'description',

    'specialization',

    'image',
];
    
    use HasFactory;


    public function user(){

        return $this->belongsTo(User::class , 'users_id');
    }

    public function class(){

        return $this->hasMany(Gym_class::class , 'users_id');
    }

    public function article(){

        return $this->hasMany(article::class);
    }

    
}
