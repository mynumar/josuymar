<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grupo;
use App\Models\Invitacione;
use App\Models\Invitado;
use Illuminate\Http\Request;

class InvitadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitados = Invitado::select('nombre', 'created_at')->orderBy('created_at')->get()->toArray();
        // dd($invitados);

        $inv = null;
        foreach ($invitados as $value) {
            $inv[] = [$value['nombre'], date( 'd/m/Y H:i:s', strtotime($value['created_at'])) ];
        }

        $invitados = $inv;
        return view('admin.invitados.index', compact('invitados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = Grupo::orderBy('name')->get();
        return view('admin.invitados.create', compact('grupos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'por' => 'required',
            'tipo' => 'required',
            'grupo_id' => 'required',
        ]);
        Invitado::create($request->all());

        $newcantidad = Grupo::find($request->grupo_id)->invitados->count();
        Invitacione::where('grupo_id', $request->grupo_id)->update(['cantidad' => $newcantidad]);

        return redirect()->route('admin.grupos.index')->with('info', 'Invitado creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function show(Invitado $invitado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function edit(Invitado $invitado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invitado $invitado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invitado $invitado)
    {
        //
    }
}
