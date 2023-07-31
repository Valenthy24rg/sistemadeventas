<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ciudad_id', 'apellido', 'direccion', 'telefono'];

    public function products() {
        return $this->belongsTo(Ciudad::class);
    }

}
