<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tallaspantalon extends Model
{
    use HasFactory;

    protected $table = "tallaspantalones";

    public $timestamps = false;

    protected $fillable = ['valor'];
}
