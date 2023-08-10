<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'cedula', 'telefono', 'direccion', 'city_id', 'products_id'];

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function products() {
        return $this->belongsTo(Product::class);
    }
}
