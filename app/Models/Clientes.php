<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'cedula', 'telefono', 'direccion', 'ciudad_id', 'products_id'];

    public function ciudad() {
        return $this->belongsTo(Ciudad::class);
    }

    public function products() {
        return $this->belongsTo(Product::class);
    }
}
