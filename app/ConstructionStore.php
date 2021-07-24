<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionStore extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'stores';
    protected $fillable = [
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
        'area_one_id',
        'area_two_id',
        'area_three_id',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo(ConstructionUser::class, 'user_id');
    }
    public function areaOne()
    {
        return $this->setConnection('mysql')->belongsTo(AreaOne::class, 'area_one_id');
    }
    public function areaTwo()
    {
        return $this->setConnection('mysql')->belongsTo(AreaTwo::class, 'area_two_id');
    }
    public function areaThree()
    {
        return $this->setConnection('mysql')->belongsTo(AreaThree::class, 'area_three_id');
    }

    public function supplier()
    {
        return $this->belongsTo(ConstructionSupplier::class, 'store_id');
    }

    public function products()
    {
        return $this->hasManyThrough(
            ConstructionProduct::class,
            ConstructionStoreProduct::class,
            'store_id', // Foreign key on the ConstructionProduct table...
            'id', // Foreign key on the ConstructionBrand table...
            'id', // Local key on the projects table...
            'product_id' // Local key on the environments table...
        );
    }

    // public function storeproducts(){
    //     return $this->belongsToMany(Product::class,'store_products','store_id','product_id');
    // }

    public function storeproducts()
    {
        return $this->hasMany(ConstructionStoreProduct::class, 'store_id');
    }

    public function storeproductswithpagination()
    {
        return $this->hasMany(ConstructionStoreProduct::class, 'store_id')->paginate(9);
    }

    public function storeservices()
    {
        return $this->hasMany(ConstructionStoreService::class, 'store_id');
    }

    public function randomproduct($limit)
    {
        return ConstructionStoreProduct::where('store_id', $this->id)->inRandomOrder()->limit($limit)->get();
    }
}
