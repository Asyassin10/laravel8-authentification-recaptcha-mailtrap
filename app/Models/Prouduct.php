<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prouduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'titale',
        'slug',
        'description',
        'price',
        'old_price',
        'in_stock',
        'picture',
        'categories_id'
    ];
    public function getRouteKeyName()
    {
        return 'titale';
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}