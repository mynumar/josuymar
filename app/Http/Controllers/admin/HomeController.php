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

        $invitaciones['enviados'] = Invitacione::where('estado', 1)->count();
        $invitaciones['confirmados'] = Invitacione::where('estado', 2)->count();

        $eventos = Evento::
            //where('estado', '1')->
            pluck('name');

        $eventos_ids = Evento::pluck('id');
        $confirmaciones = [];
        $rechazados = [];
        $sincontestar = [];

        $i = 0;
        foreach ($eventos_ids as $id) {
            array_push($confirmaciones, Confirmacione::whereHas('invitacione', function ($q) use ($id) {
                $q->where('evento_id',$id);
            })->count());

            array_push($rechazados, Invitacione::whereIn('estado', [1,2])->sum('cantidad'));
            
            array_push($sincontestar, Invitacione::select('cantidad')->sum('cantidad'));
            

            $i++;
        }
        


        return view('admin.index', compact('invitaciones', 'eventos', 'confirmaciones', 'rechazados', 'sincontestar'));
    }
}
