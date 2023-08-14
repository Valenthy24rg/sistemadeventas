<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'direccion', 'telefono', 'city_id'];

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function bills() {
        return $this->belongsTo(Bill::class);
    }
}
