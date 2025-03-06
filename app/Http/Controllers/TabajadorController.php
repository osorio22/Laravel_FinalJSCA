<?php

namespace App\Http\Controllers;

use App\Models\tabajador;
use Illuminate\Http\Request;

class TabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('trabajadores.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trabajadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tabajador $tabajador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tabajador $tabajador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tabajador $tabajador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tabajador $tabajador)
    {
        //
    }
}
