<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionBCategory extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'b_categories';
    protected $fillable = [
        'id',
        'a_category_id',
        'name',
        'slug'
    ];
    public function category()
    {
        return $this->belongsTo(ConstructionACategory::class, 'a_category_id');
    }
    public function subcategories()
    {
        return $this->hasMany(ConstructionCCategory::class, 'b_category_id');
    }
    public function ccategories()
    {
        return $this->hasMany(ConstructionCCategory::class, 'b_category_id');
    }

    public function storeproduct()
    {
        return $this->hasManyThrough(
            ConstructionStoreProduct::class,
            ConstructionProduct::class,
            'b_category_id', // Foreign key on the ConstructionProduct table...
            'product_id', // Foreign key on the ConstructionStoreProduct table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }






}
