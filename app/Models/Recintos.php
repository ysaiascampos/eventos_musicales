<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recintos extends Model
{
    protected $fillable = [
        'nombre','coste_alquiler','precio_entrada'
    ];
}
