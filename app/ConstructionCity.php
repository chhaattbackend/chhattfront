<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionCity extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'cities';
    public $timestamps=false;

    protected $fillable =[
        'id',
        'country_id',
        'name'
    ];
    public function country(){
        return $this->belongsTo(ConstructionCountry::class,'country_id');
    }
}
