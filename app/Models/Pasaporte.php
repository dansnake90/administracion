<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasaporte extends Model
{
    use HasFactory;

    protected $fillable = ['numero', 'emision', 'expiracion', 'url'];

    public function ficha(){
        return $this->hasOne('App\Models\Ficha', 'usuario_id');

}

}