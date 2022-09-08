<?php

namespace App\Http\Controllers;

use App\Models\mesaage;
use App\Http\Requests\StoremesaageRequest;
use App\Http\Requests\UpdatemesaageRequest;

class MesaageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.messages.index');
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
     * @param  \App\Http\Requests\StoremesaageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremesaageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mesaage  $mesaage
     * @return \Illuminate\Http\Response
     */
    public function show(mesaage $mesaage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mesaage  $mesaage
     * @return \Illuminate\Http\Response
     */
    public function edit(mesaage $mesaage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemesaageRequest  $request
     * @param  \App\Models\mesaage  $mesaage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemesaageRequest $request, mesaage $mesaage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mesaage  $mesaage
     * @return \Illuminate\Http\Response
     */
    public function destroy(mesaage $mesaage)
    {
        //
    }
}
