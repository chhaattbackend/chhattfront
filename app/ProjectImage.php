<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $fillable = [
        
        'name',
        'sort_order',
        'project_id'
    ];
}
