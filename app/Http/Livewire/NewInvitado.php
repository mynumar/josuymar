<?php

namespace App\Http\Livewire;

use App\Models\Evento;
use App\Models\Invitado;
use Livewire\Component;

class NewInvitado extends Component
{
    public $fullname;
    public $confirmo;
    public $evento;
    public $guardado = false;

    public function asistire(){
        $this->guardado = false;

        $this->validate([
            'fullname' => 'required',
            'confirmo' => 'required'
        ]);

        Invitado::create([
            'nombre' => $this->fullname,
            'grupo_id' => 1
        ]);

        $this->guardado = true;
    }

    public function mount(){
        $this->evento = Evento::find(2);
    }

    public function render()
    {
        return view('livewire.new-invitado');
    }
}
