<?php

namespace App\Http\Livewire\Admin;

use App\Models\Evento;
use App\Models\Grupo;
use App\Models\Invitacione;
use Livewire\Component;
use Livewire\WithPagination;

class GruposIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $evento;
    public $estado = '-1';

    protected $listeners = ['invitacioneEnviada' => 'invitacioneEnviada'];

    public function invitacioneEnviada($codigo){
        $invitacione = Invitacione::where('codigo', $codigo)->first();
        if ($invitacione->estado == 0) {
            $invitacione->update([
                'estado' => 1,
                'fecha_enviada' => date('Y-m-d H:i:s')
            ]);
    
            $this->emit('alert', 'La invitación se cambió a estado enviado.');
        }
        return;
    }

    public function invitar(Evento $evento, Grupo $grupo){
        $codigos = Invitacione::pluck('codigo');

        $newcodigo = random_int(100000, 999999);

        while ($codigos->search($newcodigo)) {
            $newcodigo = random_int(100000, 999999);
        }
        
        Invitacione::create([
            'evento_id' => $evento->id,
            'grupo_id' => $grupo->id,
            'cantidad' => $grupo->invitados->count(),
            'codigo' => $newcodigo
        ]);

    }

   

    public function render()
    {
        $that = $this;
        $eventos_all = Evento::all();

        $grupos = Grupo::where('name', 'like', '%'.trim($this->search).'%');

        if (empty($that->evento)) {
            $eventos = Evento::all();
        } else {
            $eventos = Evento::where('id', $that->evento)->get();
            $grupos = $grupos->whereHas('invitaciones', function ($q) use ($that){
                $q->where('evento_id', $that->evento);
                if ($that->estado != '-1') {
                $q->where('estado', $that->estado);
                }
            });
        }
        
        if ($that->estado != '-1') {
            $grupos = $grupos->whereHas('invitaciones', function ($q) use ($that){
                        $q->where('estado', $that->estado);
                    });
        }
        
        $grupos = $grupos->paginate('50');
        $this->resetPage();

        $estados = [
            '0' => 'No enviado',
            '1' => 'Enviado',
            '2' => 'Confirmado',
            '3' => 'Anulado',
        ];

        return view('livewire.admin.grupos-index', compact('grupos', 'eventos', 'estados', 'eventos_all'));
    }
}
