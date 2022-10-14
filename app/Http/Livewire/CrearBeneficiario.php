<?php

namespace App\Http\Livewire;

use App\Models\Beneficiario;
use Livewire\Component;

class CrearBeneficiario extends Component
{
    public $open = false;  // abre/cierra modal para registrar un nuevo beneficiario

    public $num_doc, $clase_doc, $tipo_doc, $apellido, $nombre, $mail, $celular, $observaciones;
    
    // metodo para registrar en BD un nuevo beneficiario
    public function save() {

        Beneficiario::create([
            'numero_doc' => $this->num_doc,
            'clase_documento_benef' => $this->clase_doc,
            'tipo_documento' => $this->tipo_doc,
            'apellido_benef' => $this->apellido,
            'nombre_benef' => $this->nombre,
            'mail' => $this->mail,
            'celular' => $this->celular,
            'observaciones' => $this->observaciones
        ]);

    }
    
    public function render()
    {
        return view('livewire.crear-beneficiario');
    }
}
