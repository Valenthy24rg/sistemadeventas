<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employess extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ciudad_id', 'apellido', 'direccion', 'telefono'];

    public function ciudads() {
        return $this->belongsTo(Ciudad::class);
    }

}
