<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'uad.pais'; // tabla que se relaciona con el modelo
    
    protected $primaryKey = 'id_pais';  // asigna una llave primaria, caso contrario, asigna por defecto "id"

    protected $fillable = ['nombre']; // campos visibles a la consulta sql

    protected $hidden = ['id_pais']; // campos ocultos a la consulta sql

    public $timestamps = false;  // desactiva las columnas por defecto created_at y updated_at de laravel
}
