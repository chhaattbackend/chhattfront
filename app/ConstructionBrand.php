<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionBrand extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'brands';
    protected $fillable=[
        'name'
    ];
    public $timestamps=false;
}
