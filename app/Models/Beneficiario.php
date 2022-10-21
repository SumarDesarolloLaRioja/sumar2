<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;

    protected $table = 'uad.beneficiarios'; // tabla que se relaciona con el modelo
    
    protected $primaryKey = 'id_beneficiarios';  // asigna una llave primaria, caso contrario, asigna por defecto "id"

    protected $fillable = ['estado_envio', 'clave_beneficiario', 'tipo_transaccion', 'apellido_benef', 'nombre_benef', 'clase_documento_benef',
    'tipo_documento', 'numero_doc', 'id_categoria', 'sexo', 'fecha_nacimiento_benef', 'provincia_nac', 'localidad_nac', 'pais_nac',
    'indigena', 'id_tribu', 'id_lengua', 'alfabeta', 'estudios', 'anio_mayor_nivel', 'tipo_doc_madre', 'nro_doc_madre', 'apellido_madre',
    'nombre_madre', 'alfabeta_madre', 'estudios_madre', 'anio_mayor_nivel_madre', 'tipo_doc_padre', 'nro_doc_padre', 'apellido_padre',
    'nombre_padre', 'alfabeta_padre', 'estudios_padre', 'anio_mayor_nivel_padre', 'tipo_doc_tutor', 'nro_doc_tutor', 'apellido_tutor',
    'nombre_tutor', 'alfabeta_tutor', 'estudios_tutor', 'anio_mayor_nivel_tutor', 'fecha_diagnostico_embarazo', 'semanas_embarazo',
    'fecha_probable_parto', 'fecha_efectiva_parto', 'cuie_ea', 'cuie_ah', 'menor_convive_con_adulto', 'calle', 'numero_calle', 'piso',
    'dpto', 'manzana', 'entre_calle_1', 'entre_calle_2', 'telefono', 'departamento', 'localidad', 'municipio', 'barrio', 'cod_pos',
    'observaciones', 'fecha_inscripcion', 'fecha_carga', 'usuario_carga', 'activo', 'score_riesgo', 'mail', 'celular', 'otrotel', 'estadoest',
    'fum', 'obsgenerales', 'estadoest_madre', 'tipo_ficha', 'responsable', 'discv', 'disca', 'discmo', 'discme', 'otradisc', 'estadoest_padre',
    'estadoest_tutor', 'menor_embarazada', 'latitud', 'longitud'];

    public $timestamps = false;  // desactiva las columnas por defecto created_at y updated_at de laravel
}
