<?php

namespace App\Http\Livewire\Admin;

use App\Models\Confirmacione;
use App\Models\Evento;
use App\Models\Invitacione;
use Livewire\Component;
use Livewire\WithPagination;

class ConfirmacionesIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $por;
    public $tipo;
    public $evento;
    public $eventos;

    public function mount()
    {
        $this->eventos = Evento::where('estado', '1')->get();
    }

    public function render()
    {
        $that = $this;
        $confirmaciones = Confirmacione::whereHas('invitado', function ($q) use ($that) {
            $q->where('nombre', 'like', '%' . $that->search . '%')
                ->orWhere('apellidos', 'like', '%' . $that->search . '%');
        });

        // if (!empty(Invitacione::where('codigo', $that->search)->first())) {
        //     $confirmaciones = $confirmaciones->whereHas('invitacione', function ($q) use ($that) {
        //         $q->where('codigo', $that->search);
        //     });
        // }

        if ($that->por != '') {
            $confirmaciones = $confirmaciones->whereHas('invitado', function ($q) use ($that) {
                $q->where('por', $that->por);
            });
        }
        if ($that->tipo != '') {
            $confirmaciones = $confirmaciones->whereHas('invitado', function ($q) use ($that) {
                $q->where('tipo', $that->tipo);
            });
        }
        if (!empty($this->evento)) {
            $confirmaciones = $confirmaciones->whereHas('invitacione', function ($q) use ($that) {
                $q->where('evento_id', $that->evento);
            });
        }

        $confirmaciones = $confirmaciones->paginate('50');

        $pors = [
            1 => 'Josué',
            0 => 'Marjorie',
        ];
        $tipos = [
            1 => 'Familia',
            2 => 'Amigos',
        ];

        return view('livewire.admin.confirmaciones-index', compact('confirmaciones', 'pors', 'tipos'));
    }
}
