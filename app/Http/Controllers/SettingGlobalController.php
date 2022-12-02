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
        // $setting = Setting();
        Setting::set('logo',$request->logo ?? '');
        Setting::set('icon',$request->icon ?? '');
        Setting::set('website_name',$request->website_name ?? '');
        Setting::set('404',request('404') ?? '');
        Setting::set('destination',$request->destination ?? '');
        Setting::set('activity',$request->activity ?? '');
        Setting::set('region',$request->region ?? '');
        Setting::set('packages',$request->packages ?? '');
        Setting::set('pages',$request->pages ?? '');
        Setting::set('booking',$request->booking ?? '');
        Setting::set('facebook',$request->facebook ?? '');
        Setting::set('youtube',$request->youtube ?? '');
        Setting::set('instagram',$request->instagram ?? '');
        Setting::set('twitter',$request->twitter ?? '');
        Setting::set('email',$request->email ?? '');
        Setting::set('phone_number',$request->phone_number ?? '');
        Setting::set('whatsapp',$request->whatsapp ?? '');
        Setting::set('address',$request->address ?? '');
        Setting::set('google_analytics',$request->google_analytics ?? '');
        Setting::set('copyright',$request->copyright ?? '');
        Setting::set('visa',$request->visa ?? '');
        Setting::set('mastercard',$request->mastercard ?? '');
        Setting::set('amex',$request->amex ?? '');
        Setting::set('union_pay',$request->union_pay ?? '');
        Setting::set('paypal',$request->paypal ?? '');
        Setting::set('stripe',$request->stripe ?? '');
        Setting::set('cookie_message',$request->cookie_message ?? '');
        Setting::set('site_offline',$request->site_offline ?? '');
        Setting::set('offline_message',$request->offline_message ?? '');
        // $setting->save();
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
