<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionSupplier extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'suppliers';
    protected $fillable=[
        'id',
        'user_id',
        'store_id',
        'name',
        'email',
        'contact',
        'nic',
    ];
    public function user(){
        return $this->belongsTo(ConstructionUser::class,'user_id');
    }
    public function product(){
        return $this->belongsTo(ConstructionProduct::class,'product_id');
    }
    public function store(){
        return $this->belongsTo(ConstructionStore::class,'store_id');
    }
}
