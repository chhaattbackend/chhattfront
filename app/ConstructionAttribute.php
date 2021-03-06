<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionAttribute extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'attributes';
    protected $fillable =[
        'id',
        'name'
    ];
    public $timestamps=false;
}
