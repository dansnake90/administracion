<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Federacion extends Model
{
    use HasFactory;

    protected $table = "federaciones";

    public $timestamps = false;

    protected $fillable = ['nombre'];

    public function ficha(){
        return $this->hasOne('App\Models\Ficha', 'federacion_id');
    }
}
