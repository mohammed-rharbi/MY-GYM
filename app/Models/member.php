<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{

    protected $fillable = ['goal','wight','tall','user_id'];

    use HasFactory;


    public function user(){

        return $this->belongsTo(User::class);
    }

    public function class(){

        return $this->hasMany(Gym_class::class);
    }
}
