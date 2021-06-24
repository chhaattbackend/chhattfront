<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionDCategory extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'd_categories';
    protected $fillable =[
        'id',
        'c_category_id',
        'name'
    ];
    public function category(){
        return $this->belongsTo(ConstructionCCategory::class,'c_category_id');
    }
}
