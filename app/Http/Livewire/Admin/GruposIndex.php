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
    public $url_wap;

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

    public function setMessage(Evento $evento, Grupo $grupo){
        $invitacione = Invitacione::where('evento_id', $evento->id)->where('grupo_id', $grupo->id)->first();
        $msg = "https://api.whatsapp.com/send/?phone=923731605&text=Hola%20familia%20%F0%9F%A4%97%0A%0A%C2%A1Nos%20casamos%20y%20queremos%20celebrarlo%20contigo!%20Hemos%20preparado%20un%20espacio%20para%20confirmar%20tu%20asistencia%20a%20nuestra%20boda,%20donde%20tambi%C3%A9n%20podr%C3%A1s%20explorar%20sus%20secciones.%20An%C3%ADmate%20a%20dejarnos%20tus%20deseos,%20ser%C3%A1%20especial%20leerlos.%0A%0AIngresa%20a%20https://josuymar.lat/%0A%0AAl%20hacer%20clic%20en%20confirmar%20asistencia%20les%20aparece%20un%20peque%C3%B1o%20formulario%20deben%20ingresar%20su%20apellido%20de%20familia%20y%20c%C3%B3digo:%0A%0AApellido%20de%20familia:".$grupo->nombre."%0ACodigo:".$invitacione->codigo."&type=phone_number&app_absent=0";

        return $msg;
    }

    public function render()
    {
        $that = $this;
        $grupos = Grupo::where('name', 'like', '%'.trim($this->search).'%')
                ->paginate('50');

        $eventos = Evento::all();

        return view('livewire.admin.grupos-index', compact('grupos', 'eventos'));
    }
}
