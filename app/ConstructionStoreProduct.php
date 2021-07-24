<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionStoreProduct extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'store_products';
    protected $fillable = [
        'id',
        'store_id',
        'product_id',
        'store_price',
        'brand_id',
        'qty',
        'status',
        'unit_id',
    ];



    public function store()
    {
        return $this->belongsTo(ConstructionStore::class, 'store_id');
    }

    public function product()
    {
        return $this->belongsTo(ConstructionProduct::class, 'product_id');
    }

    public function brand()
    {
        return $this->belongsTo(ConstructionBrand::class, 'brand_id');
    }

    public function attributes()
    {
        return $this->belongsTo(ConstructionAttribute::class, 'attribute_id');
    }

    public function unit()
    {
        return $this->belongsTo(ConstructionUnit::class, 'unit_id');
    }

    public function getrelatedcategory($count)
    {
        return ConstructionProduct::where('c_category_id', $this->product->c_category->id)->where('id', '!=', $this->product->id)->inRandomOrder()->take($count)->get();
    }

    public function getrelatedproduct($count)
    {
        return ConstructionProduct::where('d_category_id',$this->product->d_category_id)->where('id', '!=', $this->product->id)->inRandomOrder()->get();
    }

    // public function a_category()
    // {
    //     return $this->hasManyThrough(
    //         ConstructionStoreProduct::class,
    //         ConstructionProduct::class,
    //         'a_category_id', // Foreign key on the ConstructionProduct table...
    //         'product_id', // Foreign key on the ConstructionStoreProduct table...
    //         'id', // Local key on the projects table...
    //         'id' // Local key on the environments table...
    //     );
    // }

    // public function b_category()
    // {
    //     return $this->hasManyThrough(
    //         ConstructionStoreProduct::class,
    //         ConstructionProduct::class,
    //         'b_category_id', // Foreign key on the ConstructionProduct table...
    //         'product_id', // Foreign key on the ConstructionStoreProduct table...
    //         'id', // Local key on the projects table...
    //         'id' // Local key on the environments table...
    //     );
    // }

    // public function c_category()
    // {
    //     // dd($this);
    //     return $this->hasManyThrough(
    //         ConstructionStoreProduct::class,
    //         ConstructionProduct::class,
    //         'c_category_id', // Foreign key on the ConstructionProduct table...
    //         'product_id', // Foreign key on the ConstructionStoreProduct table...
    //         'id', // Local key on the projects table...
    //         'id' // Local key on the environments table...
    //     );
    // }

    // public function d_category()
    // {
    //     return $this->hasManyThrough(
    //         ConstructionStoreProduct::class,
    //         ConstructionProduct::class,
    //         'd_category_id', // Foreign key on the ConstructionProduct table...
    //         'product_id', // Foreign key on the ConstructionStoreProduct table...
    //         'id', // Local key on the projects table...
    //         'id' // Local key on the environments table...
    //     );
    // }


}
