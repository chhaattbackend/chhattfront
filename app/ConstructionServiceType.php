<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionServiceType extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'service_types';

    protected $fillable=[
        'id',
        'name'
    ];
}
