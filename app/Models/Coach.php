<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{

    protected $fillable = [
        
    'user_id',

    'description',

    'specialization'];
    
    use HasFactory;


    public function user(){

        return $this->belongsTo(User::class);
    }

    public function class(){

        return $this->hasMany(Gym_class::class);
    }

    public function article(){

        return $this->hasMany(article::class);
    }
}
