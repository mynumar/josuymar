<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Confirmacione;
use App\Models\Evento;
use App\Models\Invitacione;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.home'); //->only('index');

    }

    public function index()
    {

        $invitaciones_enviados = Invitacione::where('estado', 1)->count();
        $invitaciones_confirmados = Invitacione::where('estado', 2)->count();

        $eventos = Evento::
            //where('estado', '1')->
            pluck('name');

        $eventos_ids = Evento::pluck('id');
        $confirmaciones = [];
        $anulados = [];
        $sincontestar = [];

        $i = 0;
        foreach ($eventos_ids as $id) {
            array_push($confirmaciones, Confirmacione::whereHas('invitacione', function ($q) use ($id) {
                $q->where('evento_id', $id);
            })->count());

            array_push($anulados, Invitacione::where('evento_id', $id)->whereIn('estado', [3])->sum('cantidad'));
            
            array_push($sincontestar, Invitacione::select('cantidad')->where('evento_id', $id)->whereIn('estado', [1])->sum('cantidad'));
            
            $i++;
        }
        


        return view('admin.index', compact('invitaciones_enviados', 'invitaciones_confirmados', 'eventos', 'confirmaciones', 'anulados', 'sincontestar'));
    }
}
