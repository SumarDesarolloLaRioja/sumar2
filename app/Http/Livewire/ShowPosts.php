<?php

namespace App\Http\Livewire;


use App\Models\Beneficiario;
use Livewire\Component;


class ShowPosts extends Component
{
    
    public $search="Busqueda";

    
    public function render()
    {
        ini_set('max_execution_time', 600);
        ini_set('memory_limit', '-1');

        $beneficiarios = Beneficiario::offset(0)->limit(10)->get();

        return view('livewire.show-posts', compact('beneficiarios'));
    }
}
