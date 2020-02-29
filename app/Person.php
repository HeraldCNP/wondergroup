<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Person extends Model
{
    protected $fillable = [
        "name",
        "lastname",
        "email",
        "phone",
        "address",
        "web",
        "idCompany"];
    public function company(){
        return $this->belongsTo('App\Empresa', 'idCompany');
    }
}
