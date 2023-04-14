<?php

namespace App\Http\Livewire\Admin;

use App\Models\Evento;
use App\Models\Invitacione;
use Livewire\Component;
use Livewire\WithPagination;

class InvitacionesIndex extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';

    public $readyToLoad;
    public $search;
    public $evento;
    public $eventos;
    public $estado_noenviado = true;
    public $estado_enviado = true;
    public $estado_confirmado = true;
    public $estado_anulado = true;

    /*0: No enviado	1: enviado	2: confirmado	3: Anulado */

    public function loadinvitaciones(){
		$this->readyToLoad = true;
		$this->emit('readytoload');
	}

    public function mount(){
        $this->eventos = Evento::where('estado','1')->get();
    }

    public function render()
    {
        $that = $this;
        $states = [];
	        $this->estado_noenviado == true ? array_push($states, "0") : ''; 
	        $this->estado_enviado == true ? array_push($states, "1") : ''; 
	        $this->estado_confirmado == true ? array_push($states, "2") : ''; 
	        $this->estado_anulado == true ? array_push($states, "3") : ''; 

        $invitaciones = Invitacione::whereIn('estado', $states)->whereHas('grupo', function($q) use ($that){
            $q->where('name','like', '%'.$that->search.'%');
        });
        if (!empty($this->evento)) {
            $invitaciones = $invitaciones->where('evento_id', $this->evento);
        }
        
        $invitaciones = $invitaciones->paginate('50');

        $this->resetPage();

        return view('livewire.admin.invitaciones-index', compact('invitaciones'));
    }
}
