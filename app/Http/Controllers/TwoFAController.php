<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\UserCode;

class TwoFAController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
  public function index()
    {
        return view('2fa');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
        ]);
        $code = implode("",$request->code);
        $find = UserCode::where('user_id', auth()->user()->id)
                        ->where('code', $code)
                        ->where('updated_at', '>=', now()->subMinutes(2))
                        ->first();
  
        if (!is_null($find)) {
            Session::put('user_2fa', auth()->user()->id);
            //return ['success','Code Added Successfully'];
            return redirect('/');
        }
  
        //return ['error', 'You entered wrong code.'];
    
      return back()->with('error', 'You entered wrong code.');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function resend()
    {
        auth()->user()->generateCode();
  
       // return  ['success', 'We sent you code on your email.'.auth()->user()->email];
       
      return back()->with('success', 'We sent you code on your email.');
    }
}
