<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tallaschaqueta extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['valor'];
}
