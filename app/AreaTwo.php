<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaTwo extends Model
{
    protected $fillable = ['name', 'area_one_id', 'latitude', 'longitude', 'latlong'];
    protected $table = 'area_two';

    public function area_one()
    {
        return $this->belongsTo(AreaOne::class, 'area_one_id');
    }
    public function propertiesCount($inventory_type)
    {
         return $this->hasMany(Property::class, 'area_two_id')->where('property_for',$inventory_type)->count();
    }
    // public function propertiesCount($inventory_type)
    // {
    //     return $this->whereHas('properties', function ($query) use ($inventory_type) {
    //         $query->where('property_for', $inventory_type);
    //     })->count();
    // }

    public function agencies()
    {
        return $this->hasMany(Agency::class, 'area_two_id')->limit(10);
    }

    public function areathrees()
    {
        return $this->hasMany(AreaThree::class, 'area_two_id');
    }


    public function properties()
    {
        return $this->hasMany(Property::class, 'area_two_id');
    }

    public function leads()
    {
        return $this->hasMany(Lead::class, 'area_two_id');
    }
    public function map()
    {
        return $this->hasMany(Map::class, 'area_two_id');
    }
}
