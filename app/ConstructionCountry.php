<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionCountry extends Model
{
     protected $connection = 'mysql2';
    protected $table = 'countries';
    public $timestamps=false;
    protected $fillable=[
        'id',
        'name'
    ];
}
