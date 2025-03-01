<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use App\Http\Requests\StoreVoitureRequest;
use App\Http\Requests\UpdateVoitureRequest;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $voitures= Voiture::all();
        return view('voitures.voiture',['voitures' =>$voitures]);
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
    public function store(StoreVoitureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Voiture $voiture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voiture $voiture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVoitureRequest $request, Voiture $voiture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        //
    }
}
