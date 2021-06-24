<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionStore extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'stores';
    protected $fillable =[
        'id',
        'user_id',
        'city_id',
        'name',
        'email',
        'phone',
        'mobile',
        'address',
        'status',
        'nic',
        'ntn',
        'open_timing',
        'close_timing',
        'image',
        'thumbnail',
        'featured',
    ];

    public function user(){
        return $this->belongsTo(ConstructionUser::class,'user_id');
    }

    public function supplier(){
        return $this->belongsTo(ConstructionSupplier::class,'store_id');
    }

    // public function storeproducts(){
    //     return $this->belongsToMany(Product::class,'store_products','store_id','product_id');
    // }

    public function storeproducts(){
        return $this->hasMany(ConstructionStoreProduct::class,'store_id');
    }

    public function storeservices(){
        return $this->hasMany(ConstructionStoreService::class,'store_id');
    }
}