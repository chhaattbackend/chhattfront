<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionBrand extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'brands';
    protected $fillable=[
        'name',
        'slug'
    ];
    public $timestamps=false;

    public function storeproduct()
    {
        return $this->hasManyThrough(
            ConstructionStoreProduct::class,
            ConstructionProduct::class,
            'brand_id', // Foreign key on the ConstructionProduct table...
            'product_id', // Foreign key on the ConstructionStoreProduct table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }
    public function storeproductwithpagination()
    {
        return $this->hasManyThrough(
            ConstructionStoreProduct::class,
            ConstructionProduct::class,
            'brand_id', // Foreign key on the ConstructionProduct table...
            'product_id', // Foreign key on the ConstructionStoreProduct table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        )->paginate(10);
    }
}
