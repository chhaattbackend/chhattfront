<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionStoreService extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'store_services';
    public function store(){
        return $this->belongsTo(ConstructionStore::class,'store_id');
    }
    public function service(){
        return $this->belongsTo(ConstructionService::class,'service_id');
    }
    public function unit(){
        return $this->belongsTo(ConstructionUnit::class,'unit_id');
    }
    protected $fillable=[
        'id',
        'store_id',
        'service_id',
        'store_price',
        'qty',
        'status',
        'unit_id',
    ];
}
