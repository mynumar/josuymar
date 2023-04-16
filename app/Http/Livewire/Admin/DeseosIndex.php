<?php

namespace App\Http\Livewire\Admin;

use App\Models\Deseo;
use Livewire\Component;
use Livewire\WithPagination;

class DeseosIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $readyToLoad = false;

    protected $listeners = ['changeEstado' => 'changeEstado'];

    public function loadDeseos()
    {
        $this->readyToLoad = true;
        $this->emit('readytoload');
    }

    public function changeEstado(Deseo $deseo)
    {
        $newestado = !$deseo->estado;
        $update = $deseo->update([
            'estado' => $newestado
        ]);

        if ($update) {
            $this->emit('alert', $update);
        }
    }


    public function render()
    {
        $deseos = [];
        if ($this->readyToLoad) {
            $deseos = Deseo::paginate('30');
        }

        $this->resetPage();
        return view('livewire.admin.deseos-index', compact('deseos'));
    }
}
