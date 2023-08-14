<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = ['subtotal', 'total', 'employees_id', 'clients_id', 'products_id'];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function products() {
        return $this->belongsTo(Product::class);
    }
}
