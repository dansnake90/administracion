<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    //campos que queremos evitar para la asginación masiva
    protected $guarded = ['id', 'create_at', 'updated_at'];

     //Relación uno a muchos inversa

     public function user(){
         return $this->belongsTo(User::class);
     }

     public function category(){
        return $this->belongsTo(Category::class);
    }
    
    //relación muchos a muchos

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //relación uno a uno polimorfica

    public function image(){
        return $this->morphOne(Image::class, 'imageable');

    }

}