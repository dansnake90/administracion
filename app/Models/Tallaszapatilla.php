<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tallaszapatilla extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['valor'];
}
