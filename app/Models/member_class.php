<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member_class extends Model
{

    protected $fillable = ['member_id','class_id'];

    use HasFactory;

    public function class(){

        return $this->belongsTo(Gym_class::class , 'class_id');
    }

    public function member(){

        return $this->belongsTo(member::class , 'member_id');
    }
}
