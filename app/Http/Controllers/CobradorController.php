<?php

namespace App\Http\Controllers;

use App\Cobrador;
use Illuminate\Http\Request;

class CobradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cobrador.index');
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
     * @param  \App\Cobrador  $cobrador
     * @return \Illuminate\Http\Response
     */
    public function show(Cobrador $cobrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cobrador  $cobrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Cobrador $cobrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cobrador  $cobrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cobrador $cobrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cobrador  $cobrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cobrador $cobrador)
    {
        //
    }
}
