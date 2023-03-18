<?php

namespace App\Http\Livewire\Admin;

use App\Models\Invitacione;
use Livewire\Component;
use Livewire\WithPagination;

class InvitacionesIndex extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';

    public $readyToLoad;
    public $search;

    public function loadinvitaciones(){
		$this->readyToLoad = true;
		$this->emit('readytoload');
	}

    public function render()
    {
        $that = $this;
        $invitaciones = Invitacione::whereHas('grupo', function($q) use ($that){
            $q->where('name','like', '%'.$that->search.'%');
        })->paginate();

        return view('livewire.admin.invitaciones-index', compact('invitaciones'));
    }
}
