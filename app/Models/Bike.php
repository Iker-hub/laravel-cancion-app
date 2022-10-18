<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model {
    // Trait
    use HasFactory;
    
    // Tabla del modelo: bikes
    //protected $table = 'bike';
    
    // No voy a usar marcas de tiempo
    public $timestamps = false;
    
    // Campos que se deben mostrar y que son asignables
    protected $fillable = ['name'];
}