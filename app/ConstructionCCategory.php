<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionCCategory extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'c_categories';
    protected $fillable =[
        'id',
        'b_category_id',
        'name',
        'slug'
    ];
    public function category(){
        return $this->belongsTo(ConstructionBCategory::class,'b_category_id');
    }
    public function subcategories(){
        return $this->hasMany(ConstructionDCategory::class, 'c_category_id');
    }
    public function products(){
        return $this->hasMany(ConstructionProduct::class, 'c_category_id');
    }
    public function dcategories()
    {
        return $this->hasMany(ConstructionDCategory::class, 'c_category_id');
    }
    public function storeproduct()
    {
        return $this->hasManyThrough(
            ConstructionStoreProduct::class,
            ConstructionProduct::class,
            'c_category_id', // Foreign key on the ConstructionProduct table...
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
            'c_category_id', // Foreign key on the ConstructionProduct table...
            'product_id', // Foreign key on the ConstructionStoreProduct table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        )->paginate(10);
    }


}
