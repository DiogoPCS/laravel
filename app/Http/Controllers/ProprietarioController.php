<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProprietarioRequest;
use App\Http\Requests\UpdateProprietarioRequest;
use App\Models\Proprietario;

class ProprietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proprietario = Proprietario::all();
        return $proprietario;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProprietarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Proprietario $proprietario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proprietario $proprietario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProprietarioRequest $request, Proprietario $proprietario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proprietario $proprietario)
    {
        //
    }
}
