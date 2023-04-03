<?php

namespace App\Http\Livewire;

use App\Models\Confirmacione;
use App\Models\Invitacione;
use App\Models\Invitado;
use Livewire\Component;

class ConfirmarAsistencia extends Component
{
    public $open = false;
    public $apellido;
    public $codigo;
    public $invitacione;
    public $msg;
    public $invitados;
    public $newinvitados;
    public $first_invi;
    public $mostrar = 1;

    protected $rules = [
        // 'newinvitados.*.confirmed' => 'required',
        'newinvitados.*.nombre' => 'required_if:newinvitados.*.confirmed,true',
    ];

    protected $messages = [
        'newinvitados.*.nombre' => 'Complete el nombre del invitado que ha confirmado.',
    ];

    public function buscar()
    {

        $this->reset(['newinvitados', 'invitados', 'invitacione', 'mostrar']);
        $that = $this;
        $this->msg = '';

        $invitacione = Invitacione::where('codigo', $this->codigo)
            ->whereHas('grupo', function ($q) use ($that) {
                $q->where('name', $that->apellido);
            })
            ->first();

        if (!empty($invitacione)) {
            $this->invitacione = $invitacione;
            $this->first_invi = $this->invitacione->grupo->invitados->first();
        } else {
            $this->invitacione = [];
            $this->msg = 'No estás en la lista';
        }
    }

    public function guardar()
    {
        if ($this->invitacione->estado != 1) {
            // dd('return');
            return;
        }

        $this->validate();

        if (!empty($this->newinvitados)) {
            foreach ($this->newinvitados as $new) {
                array_push($this->invitados, $new);
            }
        }

        if (count($this->invitados) > $this->invitacione->cantidad) {
            $this->msg = 'Debe seleccionar solo '. $this->invitacione->cantidad . ' persona(s).';
            return;
        }

        foreach ($this->invitados as $invitado) {
            if (!empty($invitado['confirmed'])) {
                $invi = Invitado::find(empty($invitado['id']) ? 0 : $invitado['id']);
                // $first_invi_por = 0;
                // dd($invi);
                if (!empty($invi)) {
                    $invi->update(['nombre' => $invitado['nombre']]);
                } else {
                    if (Invitacione::find($this->invitacione->id)->grupo->invitados->count() < $this->invitacione->cantidad) {
                        $invi = Invitado::create([
                            'nombre' => $invitado['nombre'],
                            'por' => $this->first_invi->por,
                            'grupo_id' => $this->first_invi->grupo_id,
                        ]);
                    } else {
                        dd('no se puede crear mas invitados');
                    }
                }
                $confirmacione = Confirmacione::where('invitacione_id', $this->invitacione->id)->where('invitado_id', $invi->id)->first();
                if (empty($confirmacione)) {
                    Confirmacione::create([
                        'invitacione_id' => $this->invitacione->id,
                        'invitado_id' => $invi->id,
                    ]);

                    $this->invitacione->update(['estado' => '2']);
                } else {
                    // dd('Este invitado ya confirmó para ese evento');
                }
            } else {
            }
        }
        $this->reset(['newinvitados', 'invitados']);
        return;
    }


    public function render()
    {
        if (!empty($this->invitacione)) {
            $i = 1;
            foreach ($this->invitacione->grupo->invitados as $invitado) {
                $this->invitados[$i]['confirmed'] = empty(Confirmacione::where('invitado_id', $invitado->id)->where('invitacione_id', $this->invitacione->id)->first()) ? 0 : 1;
                $this->invitados[$i]['id'] = $invitado->id;
                $this->invitados[$i]['nombre'] = $invitado->nombre;
                $i++;
            }

            if ($this->invitacione->estado != 1) {
                $this->mostrar = 0;
            }
        }

        return view('livewire.confirmar-asistencia');
    }
}
