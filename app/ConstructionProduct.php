<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionProduct extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'products';
    protected $fillable = [
        'id',
        'a_category_id',
        'b_category_id',
        'c_category_id',
        'd_category_id',
        'e_category_id',
        'f_category_id',
        'name',
        'description',
        'price',
        'brand_id',
        'quantity',
        'thumbnail',
        'image',
        'unit_id',
    ];
    public $timestamps = false;

    public function a_category()
    {
        return $this->belongsTo(ConstructionACategory::class, 'a_category_id');
    }
    public function b_category()
    {
        return $this->belongsTo(ConstructionBCategory::class, 'b_category_id');
    }
    public function c_category()
    {
        return $this->belongsTo(ConstructionCCategory::class, 'c_category_id');
    }
    public function d_category()
    {
        return $this->belongsTo(ConstructionDCategory::class, 'd_category_id');
    }
    public function e_category()
    {
        return $this->belongsTo(ConstructionECategory::class, 'e_category_id');
    }
    public function f_category()
    {
        return $this->belongsTo(ConstructionFCategory::class, 'f_category_id');
    }
    public function attributes()
    {
        return $this->hasMany(ConstructionProductAttribute::class, 'product_id');
    }
    public function brand()
    {
        return $this->belongsTo(ConstructionBrand::class, 'brand_id');
    }
    public function storeproduct()
    {
        return $this->hasMany(ConstructionStoreProduct::class, 'product_id');
    }

    public function isstoreproduct($store_id)
    {
        // dd($this->id);
        return ConstructionStoreProduct::where('store_id', $store_id)->where('product_id', $this->id)->first();
    }

    // public function sahinaam()
    // {
    //     dd($this->id);
    //     //  return ConstructionStoreProduct::where('product_id', $this->id)->where($this->d_category();)first();


    //     return ConstructionProduct::where('id', );
    // }
}
