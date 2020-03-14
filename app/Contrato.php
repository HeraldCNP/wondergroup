<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = ['idPersona', 'idTrabajo', 'idPrecio', 'idUser', 'description'];
}
