<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['name', 'lastname', 'phone', 'address', 'web', 'idEmpresa', 'idUser'];
}
