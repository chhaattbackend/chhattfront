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
        'name'
    ];
    public function category(){
        return $this->belongsTo(ConstructionBCategory::class,'b_category_id');
    }
}