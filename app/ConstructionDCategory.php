<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionDCategory extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'd_categories';
    protected $fillable = [
        'id',
        'c_category_id',
        'name',
        'slug'
    ];
    public function category()
    {
        return $this->belongsTo(ConstructionCCategory::class, 'c_category_id');
    }
    public function subcategories()
    {
        return $this->hasMany(ConstructionECategory::class, 'd_category_id');
    }
    public function products()
    {
        return $this->hasMany(ConstructionProduct::class, 'd_category_id');
    }


    public function storeproduct()
    {
        return $this->hasManyThrough(
            ConstructionStoreProduct::class,
            ConstructionProduct::class,
            'd_category_id', // Foreign key on the ConstructionProduct table...
            'product_id', // Foreign key on the ConstructionStoreProduct table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...

        );
    }

    public function brands()
    {
        return $this->hasManyThrough(
            ConstructionBrand::class,
            ConstructionProduct::class,
            'd_category_id', // Foreign key on the ConstructionProduct table...
            'id', // Foreign key on the ConstructionBrand table...
            'id', // Local key on the projects table...
            'brand_id' // Local key on the environments table...
        );
    }


    public function storeproductwithpagination()
    {
        return $this->hasManyThrough(
            ConstructionStoreProduct::class,
            ConstructionProduct::class,
            'd_category_id', // Foreign key on the ConstructionProduct table...
            'product_id', // Foreign key on the ConstructionStoreProduct table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        )->paginate(10);
    }
}
