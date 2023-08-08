<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'direccion', 'telefono', 'ciudad_id'];

    public function ciudad() {
        return $this->belongsTo(Ciudad::class);
    }
}
