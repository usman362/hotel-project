<?php

namespace App\Http\Controllers;

use App\Models\navigation;
use App\Http\Requests\StorenavigationRequest;
use App\Http\Requests\UpdatenavigationRequest;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorenavigationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorenavigationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function show(navigation $navigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function edit(navigation $navigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatenavigationRequest  $request
     * @param  \App\Models\navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatenavigationRequest $request, navigation $navigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(navigation $navigation)
    {
        //
    }
}
