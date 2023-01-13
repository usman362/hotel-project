<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Blog;
use App\Models\Destination;
use App\Models\Newsletter;
use App\Models\Program;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class HomeController extends Controller
{


    public function index(Request $request){
        $reviews = Review::paginate(9);
        $destinations = Destination::paginate(10);
        $blogs = Blog::orderBy('created_at','desc')->paginate(3);
        $programs = Program::paginate(6);
        $programs_2 = Program::paginate(5);
        $activities = Activity::all();
        return view('frontend.pages.index',compact('reviews','destinations','blogs','programs','programs_2','activities'));
    }

    public function tour_detail($slug){
        $tour = Program::with(['program_itinerary','program_addon','program_costing','program_discount',
        'program_faq','program_support','program_unavailable','activity','region','destination'])->where('url_slug',$slug)->first();
        if($tour != true){
            abort(404);
        }
        return view('frontend.pages.tour_detail',compact('tour'));
    }

    public function book_now_page($slug){
        $booking = Program::with(['program_itinerary','program_addon','program_costing','program_discount',
        'program_faq','program_support','program_unavailable','activity','region','destination'])->where('url_slug',$slug)->first();
        if($booking != true){
            abort(404);
        }
        return view('frontend.pages.book_now_page',compact('booking'));
    }

    public function activities(){
        return view('frontend.pages.activities');
    }

    public function activities2(){
        return view('frontend.pages.activitiesDetail');
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

    public function destination(Request $request){
        if($request->has('search')){
            $destinations = Destination::where('title','LIKE','%'.$request->search.'%')->paginate(10);
        }else{
            $destinations = Destination::paginate(10);
        }
        return view('frontend.pages.destination',compact('destinations'));
    }

    public function destination2(){
        return view('frontend.pages.destinationDetail');
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

    public function tours(Request $request){

        $tour = Program::query();
        if($request->has('search')){
            $tour->where('tour_name','LIKE','%'.$request->search.'%');
        }elseif($request->has('activity')) {
            $tour->where('activity_id',$request->activity);
        }elseif($request->has('duration')){
            if($request->duration == 6){
                $tour->where('duration','>=','2')->where('duration','<=','6');
            }elseif($request->duration == 12){
                $tour->where('duration','>=','7')->where('duration','<=','12');
            }elseif($request->duration == 20){
                $tour->where('duration','>=','13')->where('duration','<=','20');
            }elseif($request->duration == 21){
                $tour->where('duration','>=','21');
            }else{
                $tour->where('duration',$request->duration);
            }
        }elseif($request->has('price')){
            if($request->price == 1000){
                $tour->where('flat_price','>','500')->where('flat_price','<=','1000');
            }elseif($request->price == 1600){
                $tour->where('flat_price','>','1000')->where('flat_price','<=','1600');
            }elseif($request->price == 2500){
                $tour->where('flat_price','>','1600')->where('flat_price','<=','2500');
            }elseif($request->price == 2501){
                $tour->where('flat_price','>','2500');
            }else{
                $tour->where('flat_price','<=',$request->price);
            }
        }
        $tours = $tour->get();


        $activities = Activity::all();
        $destinations = Destination::all();
        return view('frontend.pages.tours',compact('tours','activities','destinations'));
    }

    public function newsletter(Request $request){
        request()->validate([
            'email' => 'required|email|unique:newsletters,email',
            ]);

           $newsletter = new Newsletter();
           $newsletter->email = $request->email;
           $newsletter->save();
            $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
            if($newsletter->save()){
            $arr = array('msg' => 'Successfully submit form using ajax', 'status' => true);
            }
            return Response()->json($arr);
    }

    public function change_currency(Request $request){
        $response = new Response('Currency');
        $response->withCookie(cookie()->forever('currency', $request->currency));
        return $response;
    }
}
