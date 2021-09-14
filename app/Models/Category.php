<?php

namespace App\Models;

use App\Models\Prouduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'titale',
        'slug',

    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function products()
    {
        return $this->hasMany(Prouduct::class, 'categories_id', 'id');
    }
}