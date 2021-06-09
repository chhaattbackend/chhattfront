<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [
        'city',
        'area_one',
        'area_two',
        'location',
        'name',
        'image',
    ];

    public function getCity(){
        return $this->belongsTo(City::class, 'city');
    }

    public function getAreaOne(){
        return $this->belongsTo(AreaOne::class, 'area_one');
    }

    public function getAreaTwo(){
        return $this->belongsTo(AreaTwo::class, 'area_two');
    }
}
