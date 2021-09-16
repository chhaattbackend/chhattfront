<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [
        'city_id',
        'area_one_id',
        'area_two_id',
        'location',
        'name',
        'image',
    ];

    public function City(){
        return $this->belongsTo(City::class, 'city_id');
    }

    public function areaOne(){
        return $this->belongsTo(AreaOne::class, 'area_one_id');
    }

    public function areaTwo(){
        return $this->belongsTo(AreaTwo::class, 'area_two_id');
    }
}
