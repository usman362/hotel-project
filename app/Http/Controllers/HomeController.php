<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Destination;
use App\Models\Program;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(){
        $reviews = Review::paginate(9);
        $destinations = Destination::paginate(10);
        $blogs = Blog::orderBy('created_at','desc')->paginate(3);
        $programs = Program::paginate(6);
        $programs_2 = Program::paginate(5);
        return view('frontend.pages.index',compact('reviews','destinations','blogs','programs','programs_2'));
    }

    public function tour_detail($slug){
        $tour = Program::with(['program_itinerary','program_addon','program_costing','program_discount',
        'program_faq','program_support','program_unavailable','activity','region','destination'])->where('url_slug',$slug)->first();
        if($tour != true){
            abort(404);
        }
        return view('frontend.pages.tour_detail',compact('tour'));
    }

    public function activities(){
        return view('frontend.pages.activities');
    }

    public function activities2(){
        return view('frontend.pages.activities-2');
    }

    public function blogs(){
        $blogs = Blog::with('blog_image')->where('status','Published')->paginate(9);
        return view('frontend.pages.blogs',compact('blogs'));
    }

    public function blogDetail($slug){
        $blog = Blog::where('url_slug', $slug)->first();
        $blogs = Blog::where('url_slug','!=',$slug)->orderBy('created_at','desc')->paginate(5);
        return view('frontend.pages.blogDetail',compact('blog','blogs'));
    }

    public function booking(){
        return view('frontend.pages.booking');
    }

    public function destination(){
        return view('frontend.pages.destination');
    }

    public function destination2(){
        return view('frontend.pages.destination-2');
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function general(){
        return view('frontend.pages.general');
    }

    public function faq(){
        return view('frontend.pages.faq');
    }

    public function our_client(){
        return view('frontend.pages.our-clients');
    }

    public function our_team(){
        return view('frontend.pages.our-teams');
    }

    public function review(){
        return view('frontend.pages.review');
    }

    public function search(){
        return view('frontend.pages.search');
    }
}
