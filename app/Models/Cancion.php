<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancion extends Model {
    use HasFactory;
    
    protected $table = 'cancion';
    
    public $timestamps = true;
    
    protected $fillable = ['titulo', 'interprete', 'autor', 'duracion',
                           'genero', 'album', 'orden', 'fechapublicacion'];
}