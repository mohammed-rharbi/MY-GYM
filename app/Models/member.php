<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{

    protected $fillable = ['goal','wight','tall','users_id','image'];

    use HasFactory;


    public function user(){

        return $this->belongsTo(User::class , 'users_id');
    }

    public function class(){

        return $this->hasMany(Gym_class::class);
    }

    public function myclass(){

        return $this->hasMany(member_class::class , 'member_id' );
    }
}
