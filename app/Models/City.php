<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'department_id'];

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function provider() {
        return $this->belongsTo(Provider::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
