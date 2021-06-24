<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionECategory extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'e_categories';
    protected $fillable =[
        'id',
        'd_category_id',
        'name'
    ];
    public function category(){
        return $this->belongsTo(ConstructionDCategory::class,'d_category_id');
    }
}
