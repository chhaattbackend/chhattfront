<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionProductReview extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'product_reviews';
    protected $fillable=[
        'id',
        'user_id',
        'product_id',
        'store_id',
        'rating',
        'review',
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
