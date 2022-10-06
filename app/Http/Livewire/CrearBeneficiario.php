<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CrearBeneficiario extends Component
{
    public $open = false;
    
    public function render()
    {
        return view('livewire.crear-beneficiario');
    }
}
