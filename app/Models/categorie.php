<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{

    protected $fillable = ['name'];

    use HasFactory;


    public function article(){

        return $this->hasMany(article::class);
    }
}
