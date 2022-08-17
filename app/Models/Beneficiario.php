<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;

    //protected $fillable = ['apellido_benef','nombre_benef'];
    protected $table = 'uad.beneficiarios';
}
