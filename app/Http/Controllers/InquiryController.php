<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
class InquiryController extends Controller
{
    public function index(){
        $inquiries = ContactUs::all();
        return view('pages.inquiry.index',compact('inquiries'));
    }
    public function contact_store(Request $request){
        $contact = new ContactUs();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return back()->with('message','Contact has been Successfully Submitted!');
    }
}
