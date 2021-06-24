<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionProductDetail extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'product_details';
    protected $fillable=[
        'id',
        'product_id',
        'overview',
        'description',
        'specification',
    ];
    public function product(){
        return $this->belongsTo(ConstructionProduct::class,'product_id');
    }
}
