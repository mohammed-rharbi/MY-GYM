<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','image','description'];




    public function class(){

        $this->hasMany(Gym_class::class,'class_room_id');
    }

}


