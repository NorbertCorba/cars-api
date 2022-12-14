<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'year',
        'max_speed',
        'is_automatic',
        'engine',
        'number_of_doors',
    ];

    public function scopeSearchByBrand($query, $term)
    {
       return $query->where('brand','LIKE','%'.$term.'%');
    }

    public function scopeSearchByModel($query, $model)
    {
       return $query->where('model','LIKE','%'.$model.'%');
    }

}
