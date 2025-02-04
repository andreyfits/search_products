<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['sku', 'city_id'];

    // Связь с таблицей cities
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
