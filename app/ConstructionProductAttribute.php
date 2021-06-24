<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionProductAttribute extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'product_attributes';
    protected $fillable=[
        'id',
        'store_id',
        'product_id',
        'attribute_id',
        'desc',
    ];
    public $timestamps=false;

    public function attribute(){
        return $this->belongsTo(ConstructionAttribute::class,'attribute_id');
    }
    public function product(){
        return $this->belongsTo(ConstructionProduct::class,'product_id');
    }
    public function store(){
        return $this->belongsTo(ConstructionStore::class,'store_id');
    }
}
