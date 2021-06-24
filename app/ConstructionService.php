<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class ConstructionService extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'services';
    public function category(){
        return $this->belongsTo(ConstructionServiceType::class,'service_type_id');
    }
    protected $fillable =[
        'id',
        'service_type_id',
        'name',
        'description',
        'price',
        'image',
        'thumbnail',
        'unit_id',
    ];
}
