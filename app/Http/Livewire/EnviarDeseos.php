<?php

namespace App\Http\Livewire;

use App\Models\Deseo;
use Livewire\Component;

class EnviarDeseos extends Component
{
    public $open = true;
    public $nombre;
    public $deseos;
    public $msg;

    protected $rules = [
        'nombre' => 'required',
        'deseos' => 'required',
    ];

    protected $messages = [
        'nombre' => 'Queremos saber quien eres',
        'deseos' => 'Escribe lo que salga de tu corazón, puede ser poco o mucho.',
    ];


    public function enviar(){
        
        $this->validate();

        Deseo::create([
            'nombre' => $this->nombre,
            'deseos' => $this->deseos,
            'estado' => 0
        ]);

        $this->msg = 'Gracias por tus bellas palabras.';

        return redirect()->route('deseos.index');

    }

    public function render()
    {
        return view('livewire.enviar-deseos');
    }
}
