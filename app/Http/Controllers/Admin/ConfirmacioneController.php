<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Confirmacione;
use Illuminate\Http\Request;

class ConfirmacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.confirmaciones.index');
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
     * @param  \App\Models\Confirmacione  $confirmacione
     * @return \Illuminate\Http\Response
     */
    public function show(Confirmacione $confirmacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Confirmacione  $confirmacione
     * @return \Illuminate\Http\Response
     */
    public function edit(Confirmacione $confirmacione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Confirmacione  $confirmacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confirmacione $confirmacione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Confirmacione  $confirmacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Confirmacione $confirmacione)
    {
        //
    }
}
