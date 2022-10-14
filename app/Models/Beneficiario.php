<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;

    protected $fillable = ['numero_doc','clase_documento_benef', 'tipo_documento', 'apellido_benef', 'nombre_benef',
                          'mail', 'celular', 'observaciones'];
    
    protected $table = 'uad.beneficiarios';
}
