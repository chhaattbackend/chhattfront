<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ConstructionACategory extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'a_categories';
    protected $fillable=[
        'id',
        'name',
        'slug'
    ];
    public function bcategories()
    {
        return $this->hasMany(ConstructionBCategory::class, 'a_category_id');
    }

}
