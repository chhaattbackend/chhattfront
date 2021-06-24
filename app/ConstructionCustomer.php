<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionCustomer extends Model
{
     protected $connection = 'mysql2';
    protected $table = 'customers';

    protected $fillable=[
        'id',
        'user_id',
        'name',
        'phone',
        'email',
        'longitude',
        'latitude',
        'image',
    ];
}
