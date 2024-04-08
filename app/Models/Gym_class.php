<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym_class extends Model
{

    protected $fillable = [

        'class_types_id','title','time','date','description'];

    use HasFactory;


    public function member(){

        return $this->hasMany(member::class);
    }

    public function coach(){

        return $this->belongsTo(Coach::class);
    }

    public function class_type(){

        return $this->belongsTo(class_type::class);
    }
}
