<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionStoreProduct extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'store_products';
    protected $fillable =[
        'id',
        'store_id',
        'product_id',
        'store_price',
        'qty',
        'status',
        'unit_id',
    ];
    public function store(){
        return $this->belongsTo(ConstructionStore::class,'store_id');
    }
    public function product(){
        return $this->belongsTo(ConstructionProduct::class,'product_id');
    }
    public function brand(){
        return $this->belongsTo(ConstructionBrand::class,'brand_id');
    }
    public function attributes(){
        return $this->belongsTo(ConstructionAttribute::class,'attribute_id');
    }
    public function unit(){
        return $this->belongsTo(ConstructionUnit::class,'unit_id');
    }

    public function getrelatedcategory($count){
        return ConstructionProduct::where('c_category_id',$this->product->c_category->id)->where('id', '!=',$this->product->id)->inRandomOrder()->take($count)->get();
    }


}
