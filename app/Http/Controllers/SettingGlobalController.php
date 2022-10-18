<?php

namespace App\Http\Controllers;

use App\Models\setting_global;
use App\Http\Requests\Storesetting_globalRequest;
use App\Http\Requests\Updatesetting_globalRequest;
use Yazan\Setting\Setting;

class SettingGlobalController extends Controller
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
     * @param  \App\Http\Requests\Storesetting_globalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storesetting_globalRequest $request)
    {
        $setting = Setting();
        $setting->set('email',$request->email);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\setting_global  $setting_global
     * @return \Illuminate\Http\Response
     */
    public function show(setting_global $setting_global)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\setting_global  $setting_global
     * @return \Illuminate\Http\Response
     */
    public function edit(setting_global $setting_global)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesetting_globalRequest  $request
     * @param  \App\Models\setting_global  $setting_global
     * @return \Illuminate\Http\Response
     */
    public function update(Updatesetting_globalRequest $request, setting_global $setting_global)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\setting_global  $setting_global
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting_global $setting_global)
    {
        //
    }
}
