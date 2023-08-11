<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = ['subtotal', 'total', 'employee_id', 'client_id', 'products_id'];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
