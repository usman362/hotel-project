<?php

namespace App\Http\Controllers;

use App\Models\setting_global;
use App\Http\Requests\Storesetting_globalRequest;
use App\Http\Requests\Updatesetting_globalRequest;
use Illuminate\Http\Request;
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
        return view('pages.setting.global.global');
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
    public function store(Request $request)
    {
        $setting = Setting();
        $setting->set('logo',$request->thumbnail_image ?? '');
        $setting->set('icon',$request->icon ?? '');
        $setting->set('website_name',$request->website_name ?? '');
        $setting->set('url_slug',$request->url_slug ?? '');
        $setting->set('email',$request->email ?? '');
        $setting->set('phone',$request->phone ?? '');
        $setting->set('address',$request->address ?? '');
        $setting->set('copyright_text',$request->copyright_text ?? '');
        $setting->set('facebook',$request->facebook ?? '');
        $setting->set('instagram',$request->instagram ?? '');
        $setting->set('twitter',$request->twitter ?? '');
        $setting->set('linkedin',$request->linkedin ?? '');
        $setting->set('website_description',$request->website_description ?? '');
        $setting->set('meta_title',$request->meta_title ?? '');
        $setting->set('meta_description',$request->meta_description ?? '');
        $setting->set('meta_keywords',$request->meta_keywords ?? '');
        $setting->save();
        return redirect(route('settings.index'));
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
