<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym_class extends Model
{

    protected $fillable = [

        'class_types_id','class_room_id','users_id','title','startTime','endTime','date','description','Capacity'];

    use HasFactory;


    public function member(){

        return $this->hasMany(member::class);
    }

    public function coach(){

        return $this->belongsTo(User::class , 'users_id');
    }

    public function class_type(){

        return $this->belongsTo(class_type::class , 'id');
    }

    public function classroom(){

        return $this->belongsTo(classroom::class , 'class_room_id');
    }

    public function member_class(){

        return $this->hasMany(member_class::class , 'class_id');
    }
}
