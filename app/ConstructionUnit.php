<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionUnit extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'units';
    protected $fillable=[
        'id',
        'name'
    ];
    public $timestamps=false;
}
