<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function federacion(){
        return $this->belongsTo('App\Models\Federacion', 'federacion_id');
    }
    
    public function image(){
        return $this->hasOne('App\Models\Image', 'imageable_id', 'usuario_id');

    }

    public function pasaporte(){
        return $this->hasOne('App\Models\Pasaporte', 'pasaporteable_id', 'usuario_id');
  
    }


}
