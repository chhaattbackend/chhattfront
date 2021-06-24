<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionBCategory extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'b_categories';
    protected $fillable =[
        'id',
        'a_category_id',
        'name'
    ];
    public function category(){
        return $this->belongsTo(ConstructionACategory::class,'a_category_id');
    }
}
