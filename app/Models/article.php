<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{

    protected $fillable = [
        'users_id',
        'title',
        'content',
        'img',
        'categories_id'];
        
    use HasFactory;

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function category(){

        return $this->belongsTo(categorie::class);
    }
}
