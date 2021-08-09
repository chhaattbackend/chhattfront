<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class ConstructionService extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'services';

    public function category()
    {
        return $this->belongsTo(ConstructionServiceType::class, 'service_type_id');
    }
    protected $fillable = [
        'id',
        'service_type_id',
        'user_id',
        'area_one_id',
        'area_two_id',
        'area_three_id',
        'name',
        'description',
        'price',
        'image',
        'thumbnail',
        'unit_id',
    ];

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
    public function user()
    {
        return $this->belongsTo(ConstructionUser::class, 'user_id');
    }
    public function unit()
    {
        return $this->belongsTo(ConstructionUnit::class, 'unit_id');
    }
}
