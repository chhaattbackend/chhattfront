<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionFCategory extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'f_categories';
    protected $fillable =[
        'id',
        'e_category_id',
        'name'
    ];
    public function category(){
        return $this->belongsTo(ConstructionECategory::class,'e_category_id');
    }
}
