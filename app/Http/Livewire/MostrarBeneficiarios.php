<?php

namespace App\Http\Livewire;


use App\Models\Beneficiario;
use Livewire\Component;


class MostrarBeneficiarios extends Component
{
    
    public $sort = 'id_beneficiarios';  // ordena por este campo por defecto
    public $direction = 'asc';  // ordena de manera asc por defecto
    public $search;  // variable para realizar la busqueda

    public function render()
    {
        ini_set('max_execution_time', 600);
        ini_set('memory_limit', '-1');

        $beneficiarios = Beneficiario::where('apellido_benef','like','%'.$this->search.'%')
                    ->orWhere('nombre_benef','like','%'.$this->search.'%')
                    ->orWhere('numero_doc','like','%'.$this->search.'%')
                    ->orderBy($this->sort, $this->direction)
                    ->offset(0)->limit(20)->get();

        return view('livewire.mostrar-beneficiarios', compact('beneficiarios'));
    }

    
    // funcion para ordenar los campos de manera asc o desc
    public function order($sort) {

        if ($this->sort == $sort) {
            
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
            
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
