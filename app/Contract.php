<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'idPerson',
        'idJob',
        'cost',
        'observation'
    ];

    public function persona()
    {
        return $this->belongsTo('App\Person', 'idPerson');
    }

    public function job()
    {
        return $this->belongsTo('App\Job', 'idJob');
    }
}
