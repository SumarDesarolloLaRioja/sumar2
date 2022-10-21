<?php

namespace App\Http\Livewire;

use App\Models\Beneficiario;
use App\Models\Pais;
use Livewire\Component;

class CrearBeneficiario extends Component
{
    public $open = false;  // abre/cierra modal para registrar un nuevo beneficiario

    public  $estado_envio='n', $clave_beneficiario='0800100021351892', $tipo_transaccion='A', $apellido_benef, $nombre_benef, 
    $clase_documento_benef='P', $tipo_documento='DNI', $numero_doc, $id_categoria=1, $sexo='', $fecha_nacimiento_benef='', 
    $provincia_nac='LA RIOJA', $localidad_nac='LA RIOJA', $pais_nac='ARGENTINA', $indigena='N', $id_tribu=-1, $id_lengua=-1, 
    $alfabeta='N', $estudios='C', $anio_mayor_nivel=0, $tipo_doc_madre='DNI', $nro_doc_madre='0', $apellido_madre='',
    $nombre_madre='', $alfabeta_madre='', $estudios_madre='', $anio_mayor_nivel_madre=0, $tipo_doc_padre='', $nro_doc_padre='0', 
    $apellido_padre='', $nombre_padre='', $alfabeta_padre='', $estudios_padre='', $anio_mayor_nivel_padre=0, $tipo_doc_tutor='', 
    $nro_doc_tutor='0', $apellido_tutor='', $nombre_tutor='', $alfabeta_tutor='', $estudios_tutor='', $anio_mayor_nivel_tutor=0, 
    $fecha_diagnostico_embarazo='1899-12-30', $semanas_embarazo=0, $fecha_probable_parto='1899-12-30', $fecha_efectiva_parto='1899-12-30', 
    $cuie_ea='L00450', $cuie_ah='L00450', $menor_convive_con_adulto='', $calle='centro', $numero_calle='s/n', $piso='',
    $dpto='', $manzana='', $entre_calle_1='', $entre_calle_2='', $telefono='4898989', $departamento='CAPITAL', $localidad='LA RIOJA', 
    $municipio='LA RIOJA', $barrio='ANGELELLI', $cod_pos='5300', $observaciones='', $fecha_inscripcion='2022-01-01', $fecha_carga='2022-10-17', 
    $usuario_carga='drescu', $activo='1', $score_riesgo='0', $mail, $celular, $otrotel='', $estadoest='C', $fum='1899-12-30', $obsgenerales='', 
    $estadoest_madre='', $tipo_ficha='2', $responsable='-1', $discv='', $disca='', $discmo='', $discme='', $otradisc='', $estadoest_padre='',
    $estadoest_tutor='', $menor_embarazada='N', $latitud='', $longitud='';

    
    // metodo para registrar en BD un nuevo beneficiario
    public function save() {

        Beneficiario::create([
            'estado_envio' => $this->estado_envio, 
            'clave_beneficiario' => $this->clave_beneficiario, 
            'tipo_transaccion' => $this->tipo_transaccion, 
            'apellido_benef' => $this->apellido_benef, 
            'nombre_benef' => $this->nombre_benef, 
            'clase_documento_benef' => $this->clase_documento_benef,
            'tipo_documento' => $this->tipo_documento, 
            'numero_doc' => $this->numero_doc, 
            'id_categoria' => $this->id_categoria, 
            'sexo' => $this->sexo, 
            'fecha_nacimiento_benef' => $this->fecha_nacimiento_benef, 
            'provincia_nac' => $this->provincia_nac, 
            'localidad_nac' => $this->localidad_nac, 
            'pais_nac' => $this->pais_nac,
            'indigena' => $this->indigena, 
            'id_tribu' => $this->id_tribu, 
            'id_lengua' => $this->id_lengua, 
            'alfabeta' => $this->alfabeta, 
            'estudios' => $this->estudios, 
            'anio_mayor_nivel' => $this->anio_mayor_nivel, 
            'tipo_doc_madre' => $this->tipo_doc_madre, 
            'nro_doc_madre' => $this->nro_doc_madre, 
            'apellido_madre' => $this->apellido_madre,
            'nombre_madre' => $this->nombre_madre, 
            'alfabeta_madre' => $this->alfabeta_madre, 
            'estudios_madre' => $this->estudios_madre, 
            'anio_mayor_nivel_madre' => $this->anio_mayor_nivel_madre, 
            'tipo_doc_padre' => $this->tipo_doc_padre, 
            'nro_doc_padre' => $this->nro_doc_padre, 
            'apellido_padre' => $this->apellido_padre,
            'nombre_padre' => $this->nombre_padre, 
            'alfabeta_padre' => $this->alfabeta_padre, 
            'estudios_padre' => $this->estudios_padre, 
            'anio_mayor_nivel_padre' => $this->anio_mayor_nivel_padre, 
            'tipo_doc_tutor' => $this->tipo_doc_tutor, 
            'nro_doc_tutor' => $this->nro_doc_tutor, 
            'apellido_tutor' => $this->apellido_tutor,
            'nombre_tutor' => $this->nombre_tutor, 
            'alfabeta_tutor' => $this->alfabeta_tutor, 
            'estudios_tutor' => $this->estudios_tutor, 
            'anio_mayor_nivel_tutor' => $this->anio_mayor_nivel_tutor, 
            'fecha_diagnostico_embarazo' => $this->fecha_diagnostico_embarazo, 
            'semanas_embarazo' => $this->semanas_embarazo,
            'fecha_probable_parto' => $this->fecha_probable_parto, 
            'fecha_efectiva_parto' => $this->fecha_efectiva_parto, 
            'cuie_ea' => $this->cuie_ea, 
            'cuie_ah' => $this->cuie_ah, 
            'menor_convive_con_adulto' => $this->menor_convive_con_adulto, 
            'calle' => $this->calle, 
            'numero_calle' => $this->numero_calle, 
            'piso' => $this->piso,
            'dpto' => $this->dpto, 
            'manzana' => $this->manzana, 
            'entre_calle_1' => $this->entre_calle_1, 
            'entre_calle_2' => $this->entre_calle_2, 
            'telefono' => $this->telefono, 
            'departamento' => $this->departamento, 
            'localidad' => $this->localidad, 
            'municipio' => $this->municipio, 
            'barrio' => $this->barrio, 
            'cod_pos' => $this->cod_pos,
            'observaciones' => $this->observaciones, 
            'fecha_inscripcion' => $this->fecha_inscripcion, 
            'fecha_carga' => $this->fecha_carga, 
            'usuario_carga' => $this->usuario_carga, 
            'activo' => $this->activo, 
            'score_riesgo' => $this->score_riesgo, 
            'mail' => $this->mail, 
            'celular' => $this->celular, 
            'otrotel' => $this->otrotel, 
            'estadoest' => $this->estadoest,
            'fum' => $this->fum, 
            'obsgenerales' => $this->obsgenerales, 
            'estadoest_madre' => $this->estadoest_madre, 
            'tipo_ficha' => $this->tipo_ficha, 
            'responsable' => $this->responsable, 
            'discv' => $this->discv, 
            'disca' => $this->disca, 
            'discmo' => $this->discmo, 
            'discme' => $this->discme, 
            'otradisc' => $this->otradisc, 
            'estadoest_padre' => $this->estadoest_padre,
            'estadoest_tutor' => $this->estadoest_tutor, 
            'menor_embarazada' => $this->menor_embarazada, 
            'latitud' => $this->latitud, 
            'longitud' => $this->longitud
        ]);

    }
    
    public function render()
    {

        $paices = Pais::orderBy('id_pais')->get();

        return view('livewire.crear-beneficiario', compact('paices'));
    }
}
