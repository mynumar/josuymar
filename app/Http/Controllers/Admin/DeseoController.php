<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deseo;
use Illuminate\Http\Request;

class DeseoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.deseos.index');
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
     * @param  \App\Models\Deseo  $deseo
     * @return \Illuminate\Http\Response
     */
    public function show(Deseo $deseo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deseo  $deseo
     * @return \Illuminate\Http\Response
     */
    public function edit(Deseo $deseo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deseo  $deseo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deseo $deseo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deseo  $deseo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deseo $deseo)
    {
        //
    }
}
