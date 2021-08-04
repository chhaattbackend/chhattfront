<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionUserService extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'user_services';
    protected $fillable=[
        'id',
        'user_id',
        'service_id',
        'area_one_id',
        'area_two_id',
        'area_three_id',
        'store_price',
        'qty',
        'status',
        'unit_id',
    ];

    public function areaOne()
    {
        return $this->setConnection('mysql')->belongsTo(AreaOne::class, 'area_one_id');
    }
    public function areaTwo()
    {
        return $this->setConnection('mysql')->belongsTo(AreaTwo::class, 'area_two_id');
    }
    public function areaThree()
    {
        return $this->setConnection('mysql')->belongsTo(AreaThree::class, 'area_three_id');
    }

    public function user(){
        return $this->belongsTo(ConstructionUser::class,'user_id');
    }

    public function service(){
        return $this->belongsTo(ConstructionService::class,'service_id');
    }

    public function unit(){
        return $this->belongsTo(ConstructionUnit::class,'unit_id');
    }
}
