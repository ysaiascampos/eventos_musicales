<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concierto extends Model
{
    protected $fillable = [
        'nombre', 'numero_espectador','fecha','rentabilidad','id_promotor','id_recinto'
    ];
}
