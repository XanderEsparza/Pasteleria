<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "tamano",
        "sabor",
        "pisos",
        "precio",
        "imagen"
    ];
}
