<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class class_type extends Model
{
    protected $fillable = ['name','description'];
    use HasFactory;

    public function class(){

        return $this->hasMany(Gym_class::class);
    }
}
