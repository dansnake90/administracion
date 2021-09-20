<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

        //metodo 
    public function getRouteKeyName()
    {
    return 'slug';
    }
    
     //relación muchos a muchos

     public function posts(){
        return $this->belongsToMany(Post::class);
    }

}
