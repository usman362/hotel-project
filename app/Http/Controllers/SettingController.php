<?php

namespace App\Http\Controllers;

use App\Models\setting_global;
use App\Models\account;
use App\Models\User;
use App\Models\payment;
use App\Models\navigation;
use App\Models\widget;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Storesetting_globalRequest;
use App\Http\Requests\Updatesetting_globalRequest;
use App\Http\Requests\StoreaccountRequest;
use App\Http\Requests\UpdateaccountRequest;
use App\Http\Requests\StorenavigationRequest;
use App\Http\Requests\UpdatenavigationRequest;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\WidgetRequest;
use App\Http\Requests\PaymentRequest;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $teams = Team::all();
        return view('pages.setting.global.global');
    }

    public function global()
    {
        $global = setting_global::first();
        return view('pages.setting.global.global', ['global'=> $global]);
    }

    public function globalPost(Storesetting_globalRequest $request)
    {
        $global = setting_global::first();
        if($global && !empty($global->id)){
            $global->web_name = $request->web_name;
            $global->url_slug = $request->url_slug;
            $global->social_links = $request->social_links;
            $global->email = $request->email;
            $global->phone = $request->phone;
            $global->address = $request->address;
            $global->google_ana_trac_id = $request->google_ana_trac_id;
            $global->copyright_text = $request->copyright_text;
            $global->cookie_msg = $request->cookie_msg;
            $global->meta_title = $request->meta_title;
            $global->meta_desc = $request->meta_desc;
            $global->sitemap_generator = $request->sitemap_generator;
            $global->still_offline = $request->still_offline;

            if($request->hasFile('logo')){
                $logo = $request->file('logo');
                $filename = time() . '.' . $logo->getClientOriginalExtension();
                $logo->move(public_path('images'), $filename);
                $global->logo = $filename;
            }

            if($request->hasFile('credit_card_icons')){
                $logo = $request->file('credit_card_icons');
                $filename = time() . '.' . $logo->getClientOriginalExtension();
                $logo->move(public_path('images'), $filename);
                $global->credit_card_icons = $filename;
            }
            $global->save();

        }else{
            $global = new setting_global();
            $global->web_name = $request->web_name;
            $global->url_slug = $request->url_slug;
            $global->social_links = $request->social_links;
            $global->email = $request->email;
            $global->phone = $request->phone;
            $global->address = $request->address;
            $global->google_ana_trac_id = $request->google_ana_trac_id;
            $global->copyright_text = $request->copyright_text;
            $global->cookie_msg = $request->cookie_msg;
            $global->meta_title = $request->meta_title;
            $global->meta_desc = $request->meta_desc;
            $global->sitemap_generator = $request->sitemap_generator;
            $global->still_offline = $request->still_offline;

            if($request->hasFile('logo')){
                $logo = $request->file('logo');
                $filename = time() . '.' . $logo->getClientOriginalExtension();
                $logo->move(public_path('images'), $filename);
                $global->logo = $filename;
            }

            if($request->hasFile('credit_card_icons')){
                $logo = $request->file('credit_card_icons');
                $filename = time() . '.' . $logo->getClientOriginalExtension();
                $logo->move(public_path('images'), $filename);
                $global->credit_card_icons = $filename;
            }
            $global->save();
        }
        return redirect()->route('setting.global');
    }

    public function account()
    {
        $account = account::first();
        return view('pages.setting.account.account', ['account'=> $account]);
    }

    public function accountPost(StoreaccountRequest $request)
    {
        $account = account::first();
        if($account && !empty($account->id)){
            // $account = new account();
            $account->name = $request->name;
            $account->email = $request->email;
            $account->phone = $request->phone;
            $account->address = $request->address;
            $account->password = Hash::make($request->password);
            $account->password_decrpt = $request->password;

            if($request->hasFile('profile_pic')){
                $profile_pic = $request->file('profile_pic');
                $filename = time() . '.' . $profile_pic->getClientOriginalExtension();
                $profile_pic->move(public_path('images'), $filename);
                $account->profile_pic = $filename;
            }

            $account->save();

        }else{
            $account = new account();
            $account->name = $request->name;
            $account->email = $request->email;
            $account->phone = $request->phone;
            $account->address = $request->address;
            $account->password = Hash::make($request->password);
            $account->password_decrpt = $request->password;

            if($request->hasFile('profile_pic')){
                $profile_pic = $request->file('profile_pic');
                $filename = time() . '.' . $profile_pic->getClientOriginalExtension();
                $profile_pic->move(public_path('images'), $filename);
                $account->profile_pic = $filename;
            }

            $account->save();
        }
        return redirect()->route('setting.account');
    }



    public function users()
    {
        $users = User::all();
        return view('pages.setting.user.index', ['users'=> $users]);
    }

    public function EditUser($id)
    {
        $user = User::find($id);
        // var_dump($user); die;
        return view('pages.setting.user.edit', ['user'=> $user]);
    }

    public function emailView(){
        return view('pages.setting.email.email');
    }


    public function PostEmail(EmailRequest $request){
        $header = "From: atiqghta@gmail.com";
        mail($request->email, $request->subject, $request->msg, $header);
        return view('pages.setting.email.email');
    }

    public function widgetView()
    {
        $widget = widget::first();
        return view('pages.setting.widget.widget', ['widget'=> $widget]);
    }

    public function Postwidget(WidgetRequest $request)
    {
        // widget

        $widget = widget::first();
        if($widget && !empty($widget->id)){
            // $account = new account();
            $widget->top_left = $request->top_left;
            $widget->top_right = $request->top_right;
            $widget->footer = $request->footer;
            $widget->footer_bottom = $request->footer_bottom;
            $widget->why_bk_with_us = $request->why_bk_with_us;
            $widget->customer_support = $request->customer_support;
            $widget->trusted_travel_partner = $request->trusted_travel_partner;
            $widget->faq_sidebar_widget = $request->faq_sidebar_widget;
            $widget->contact_us_sidebar_wiget = $request->contact_us_sidebar_wiget;
            $widget->save();

        }else{
            $widget = new widget();
            $widget->top_left = $request->top_left;
            $widget->top_right = $request->top_right;
            $widget->footer = $request->footer;
            $widget->footer_bottom = $request->footer_bottom;
            $widget->why_bk_with_us = $request->why_bk_with_us;
            $widget->customer_support = $request->customer_support;
            $widget->trusted_travel_partner = $request->trusted_travel_partner;
            $widget->faq_sidebar_widget = $request->faq_sidebar_widget;
            $widget->contact_us_sidebar_wiget = $request->contact_us_sidebar_wiget;
            $widget->save();
        }
        return redirect()->route('setting.widget');
        // return view('pages.setting.widget.widget');
    }

    public function payment()
    {
        $payment = payment::first();
        return view('pages.setting.payment.payment', ['payment'=> $payment]);
    }

    public function Postpayment(PaymentRequest $request)
    {
        $payment = payment::first();
        if($payment && !empty($payment->id)){
            $payment->paymentOption = $request->paymentOption;
            $payment->depositOption = $request->depositOption;
            $payment->guestBooking = $request->guestBooking;
            $payment->stripe_secret_key = $request->secret_key;
            $payment->stripe_public_key = $request->public_key;
            $payment->paypal_success_url = $request->success_url;
            $payment->paypal_cancel_url = $request->cancel_url;
            $payment->paypal_ipn_file_url = $request->ipn_file_url;
            $payment->paypal_mode = $request->paypal_mode;
            $payment->currency = $request->currency;
            $payment->symbol = $request->symbol;
            $payment->exchange_rate = $request->exchange_rate;
            $payment->decimal_points = $request->decimal_points;
            $payment->seperator_option = $request->seperator_option;

            $payment->save();

        }else{
            $payment = new payment();
            $payment->paymentOption = $request->paymentOption;
            $payment->depositOption = $request->depositOption;
            $payment->guestBooking = $request->guestBooking;
            $payment->stripe_secret_key = $request->secret_key;
            $payment->stripe_public_key = $request->public_key;
            $payment->paypal_success_url = $request->success_url;
            $payment->paypal_cancel_url = $request->cancel_url;
            $payment->paypal_ipn_file_url = $request->ipn_file_url;
            $payment->paypal_mode = $request->paypal_mode;
            $payment->currency = $request->currency;
            $payment->symbol = $request->symbol;
            $payment->exchange_rate = $request->exchange_rate;
            $payment->decimal_points = $request->decimal_points;
            $payment->seperator_option = $request->seperator_option;

            $payment->save();
        }
        return redirect()->route('setting.payment');
        // return view('pages.setting.widget.widget');
    }


    public function UpdateUser(UpdatenavigationRequest $request, $id){
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->role	= $request->role;
        if(!empty($request->password)){
            $user->password	= Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('setting.users');
    }

    public function DeleteUser($id){
        $user = User::find($id);
        if($user->delete()){
            return redirect(route('setting.users'));
        }
        return redirect(route('setting.users'));
    }

    public function AddUserView(){
        return view('pages.setting.user.add');
    }

    public function AddUser(StorenavigationRequest $request)
    {
        $user = new User();
        $user->first_name	= $request->first_name;
        $user->last_name	= $request->last_name;
        $user->email	= $request->email;
        $user->role	= $request->role;
        $user->password	= Hash::make($request->password);
        $user->save();
        return redirect()->route('setting.users');
    }





    public function navigation()
    {
        $navs = navigation::all();
        return view('pages.setting.navigation.index', ['navs'=> $navs]);
    }

    public function navEdit($id)
    {
        $nav = navigation::find($id);
        return view('pages.setting.navigation.edit', ['nav'=> $nav]);
    }

    public function navUpdate(UpdatenavigationRequest $request, $id){
        $navs = navigation::find($id);
        $navs->name	= $request->nav_name;
        $navs->link	= $request->nav_link;
        $navs->sub_navs = implode(' , ', $request->sub_nav);
        $navs->sub_nav_links = implode(' , ', $request->sub_nav_link);
        $navs->save();
        return redirect()->route('setting.navigation');
    }

    public function navdelete($id){
        $nav = navigation::find($id);
        if($nav->delete()){
            return redirect(route('setting.navigation'));
        }
        return redirect(route('setting.navigation'));
    }

    public function navigationAdd(){
        return view('pages.setting.navigation.add');
    }

    public function navAdd(StorenavigationRequest $request)
    {
        $navs = new navigation();
        $navs->name	= $request->nav_name;
        $navs->link	= $request->nav_link;
        $navs->sub_navs = implode(' , ', $request->sub_nav);
        $navs->sub_nav_links = implode(' , ', $request->sub_nav_link);
        $navs->save();
        return redirect()->route('setting.navigation');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.team.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {
        $request->validate([
            'title'=>'required',
        ]);

        $page = new Team();
        $page->title = $request->title;
        $page->post = $request->post;
        $page->description = $request->description;
        $page->status = $request->status;
        $page->profile_order = $request->profile_order;
        // $page->meta_desc = $request->meta_desc;
        // $page->meta_keywords = $request->meta_keywords;
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('images'), $filename);
            $page->avatar_image = $filename;
        }
        $page->save();
        return redirect(route('team.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('pages.team.edit', ['team'=> $team]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamRequest $request, $id)
    {
        $page = Team::find($id);
        $page->title = $request->title;
        $page->post = $request->post;
        $page->description = $request->description;
        $page->status = $request->status;
        $page->profile_order = $request->profile_order;
        // $page->meta_desc = $request->meta_desc;
        // $page->meta_keywords = $request->meta_keywords;
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('images'), $filename);
            $page->avatar_image = $filename;
        }
        $page->save();
        return redirect(route('team.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team, $id)
    {
        if($team->find($id)->delete()){
            return redirect(route('team.index'));
        }
        return redirect(route('team.index'));
    }
}
