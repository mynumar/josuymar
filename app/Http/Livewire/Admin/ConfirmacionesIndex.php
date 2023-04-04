<?php

namespace App\Http\Livewire\Admin;

use App\Models\Confirmacione;
use Livewire\Component;
use Livewire\WithPagination;

class ConfirmacionesIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function render()
    {
        $that = $this;
        $confirmaciones = Confirmacione::whereHas('invitado', function($q) use ($that){
                            $q->where('nombre', 'like', '%'.$that->search.'%')
                                ->orWhere('apellidos', 'like', '%'.$that->search.'%');
                        })
                        ->orWhereHas('invitacione', function($q) use ($that){
                            $q->where('codigo', 'like', '%'.$that->search.'%');
                        })
                        ->orWhereHas('invitacione', function($q) use ($that){
                            $q->whereHas('evento', function($q) use ($that){
                                $q->where('name', 'like', '%'.$that->search.'%');
                            });
                        })
                    ->paginate('50');

        return view('livewire.admin.confirmaciones-index', compact('confirmaciones'));
    }
}
