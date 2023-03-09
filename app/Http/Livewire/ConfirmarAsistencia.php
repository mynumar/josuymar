<?php

namespace App\Http\Livewire;

use App\Models\Invitacione;
use Livewire\Component;

class ConfirmarAsistencia extends Component
{
    public $open = false;
    public $apellido;
    public $codigo;
    public $invitacione;

    public function buscar(){
        $that = $this;
        $invitacione = Invitacione::where('codigo', $this->codigo)
                        ->whereHas('grupo', function ($q) use($that){
                            $q->where('name', $that->apellido);
                        })
                        ->first();

        if (!empty($invitacione)) {
            $this->invitacione = $invitacione;
        } else {
            $this->invitacione = '';
        }

    }


    public function render()
    {
        return view('livewire.confirmar-asistencia');
    }
}
