<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Imports\InvitadosImport;
use App\Models\Invitacione;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\ValidationException;

class InvitacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.invitaciones.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invitacione  $invitacione
     * @return \Illuminate\Http\Response
     */
    public function show(Invitacione $invitacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invitacione  $invitacione
     * @return \Illuminate\Http\Response
     */
    public function edit(Invitacione $invitacione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invitacione  $invitacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invitacione $invitacione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invitacione  $invitacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invitacione $invitacione)
    {
        //
    }

    public function importInvitaciones(Request $request){

        $request->validate([
            'file' => 'required',
        ]);

        $file = $request->file('file');
        $tipo = $request->tipo;

        try {
            Excel::import(new InvitadosImport(), $file);

        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            //dd($failures);

            $exception = ValidationException::withMessages(collect($failures)->map->toArray()->all());
            throw $exception;
        }

        return redirect()->route('admin.invitaciones.index')->with('info', 'Se cargó los invitados correctamente');
    }
}
