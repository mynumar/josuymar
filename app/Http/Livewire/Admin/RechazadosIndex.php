<?php

namespace App\Http\Livewire\Admin;

use App\Models\Evento;
use App\Models\Invitacione;
use Livewire\Component;
use Livewire\WithPagination;

class RechazadosIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public $por;
    public $tipo;
    public $evento;

    public function render()
    {
        $invitaciones = Invitacione::where('estado', '2');

        if (!empty($this->evento)) {
            $invitaciones = $invitaciones->where('evento_id', $this->evento);
        }

        $invitaciones = $invitaciones->get();

        $pors = [
            1 => 'Josué',
            0 => 'Marjorie',
        ];
        $tipos = [
            1 => 'Familia',
            2 => 'Amigos',
        ];
        $eventos = Evento::all();

        $this->resetPage();

        return view('livewire.admin.rechazados-index', compact('invitaciones', 'pors', 'tipos', 'eventos'));
    }
}
