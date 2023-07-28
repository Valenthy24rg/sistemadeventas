<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'departamento_id'];

    public function departamento() {
        return $this->belongsTo(Departamento::class);
    }
}
