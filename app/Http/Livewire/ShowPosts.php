<?php

namespace App\Http\Livewire;


use App\Models\Beneficiario;
use Livewire\Component;


class ShowPosts extends Component
{
    
    public $search;

    
    public function render()
    {
        ini_set('max_execution_time', 600);
        ini_set('memory_limit', '-1');

        $beneficiarios = Beneficiario::where('apellido_benef','like','%'.$this->search.'%')
                    ->orwhere('nombre_benef','like','%'.$this->search.'%')
                    ->orderby('id_beneficiarios')
                    ->offset(0)->limit(10)->get();

        return view('livewire.show-posts', compact('beneficiarios'));
    }
}
