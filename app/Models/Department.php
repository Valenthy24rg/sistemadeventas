<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<<< HEAD:app/Models/Department.php
class Department extends Model
========
class Employess extends Model
>>>>>>>> origin/develop_crud:app/Models/Employess.php
{
    use HasFactory;


<<<<<<<< HEAD:app/Models/Department.php
    protected $fillable = ['nombre'];

    public function ciudad() {
========
    public function ciudads() {
>>>>>>>> origin/develop_crud:app/Models/Employess.php
        return $this->belongsTo(Ciudad::class);
    }
}
