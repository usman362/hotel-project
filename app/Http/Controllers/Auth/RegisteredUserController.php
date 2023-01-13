<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserInfo;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name'  => 'required|string|max:255',
            // 'email'      => 'required|string|email|max:255|unique:users',
            // 'password'   => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'first_name' => request('first-name'),
            'last_name'  => request('last-name'),
            'email'      => request('hidden-email'),
            'password'   => Hash::make(request('hidden-password')),
            'role'      => 'user',
        ]);

        $userInfo = UserInfo::create([
            'user_id' => $user->id,
            'avatar'  => request('avatar'),
            'phone'      => request('mobile-number'),
            'dob_day'      => request('dob-day'),
            'dob_month'      => request('dob-month'),
            'dob_year'      => request('dob-year'),
            'gender'      => request('gender'),
            'zipcode'      => request('zipcode'),
            'language'      => 'en',
        ]);
         $credentials = $request->only('hidden-email', 'hidden-password');

        //event(new Registered($user));

        Auth::login($user);

        auth()->user()->generateCode();

        return redirect(RouteServiceProvider::HOME);
    }


    /**
     * Handle an incoming api registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function apiStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|string|email|max:255|unique:users',
            'password'   => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $token = Str::random(60);
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'api_token' => hash('sha256', $token),
        ]);

        return response($user);
    }
}
