<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Models\Destination;
use App\Models\Region;
use App\Models\Activity;
use App\Models\ProgramAddon;
use App\Models\ProgramCosting;
use App\Models\ProgramDiscount;
use App\Models\ProgramFaq;
use App\Models\ProgramItinerary;
use App\Models\TieredPrice;
use App\Models\ProgramSupport;
use App\Models\ProgramUnavailable;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.programs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::all();
        $regions = Region::all();
        $activities = Activity::all();
        return view('pages.programs.add',compact('destinations','regions','activities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProgramRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program = new Program();
        $program->tour_name = $request->tour_name;
        $program->url_slug = $request->url_slug;
        $program->ribbon = $request->ribbon;
        $program->reference = $request->reference;
        $program->destination_id = $request->destination_id;
        $program->activity_id = $request->activity_id;
        $program->region_id = $request->region_id;
        $program->duration = $request->duration;
        $program->difficult = $request->difficult;
        $program->max_elevation = $request->max_elevation;
        $program->min_participant = $request->min_participant;
        $program->max_participant = $request->max_participant;
        $program->meals = $request->meals;
        $program->accommodation = $request->accommodation;
        $program->best_months = $request->best_months;
        $program->distance = $request->distance;
        $program->start_end = $request->start_end;
        $program->daily_activity = $request->daily_activity;
        $program->tour_overview = $request->tour_overview;
        // if($request->hasfile('tour_gallery'))
        //  {
        // foreach($request->file('tour_gallery') as $image)
        // {
        //     $name=$image->getClientOriginalName();
        //     $image->move(public_path().'/images/TourGallery', $name);
        //     $gallery[] = $name;
        // }
        // $program->tour_gallery = json_encode($gallery);
        // }else{
        //       $program->tour_gallery = 1;
        // }
         if($request->hasfile('tour_brochure'))
         {
            $brochure=$request->tour_brochure->getClientOriginalName();
            $request->tour_brochure->move(public_path().'/images/TourBrochure', $brochure);

             $program->tour_brochure = $brochure;
         }else{
              $program->tour_brochure = 1;
         }
        $program->tour_gallery = json_encode($request->tour_gallery);
        $program->tour_thumbnail = $request->tour_thumbnail;
        $program->tour_banner = $request->tour_banner;
        $program->tour_map = $request->tour_map;
        $program->tour_highlights = json_encode($request->tour_highlights);
        $program->free_cancellation = $request->free_cancellation;
        $program->pricing_type = $request->pricing_type;
        $program->flat_price = $request->flat_price;
        $program->product_cutoff = $request->product_cutoff;
        $program->activate_discounts = $request->activate_discounts;
        $program->unavailable_dates = $request->unavailable_dates;
        $program->is_bookable = $request->is_bookable;
        $program->booking_type = $request->booking_type;
        $program->related_trips = $request->related_trips;
        $program->meta_title = $request->meta_title;
        $program->meta_description = $request->meta_description;
        $program->meta_keyword = $request->meta_keyword;
        $program->save();
       if($request->pricing_type == 'Tiered Pricing'){
           $tr = 0;
           foreach($request->min_pax as $minpax){
               $tiered = new TieredPrice();
               $tiered->program_id = $program->id;
               $tiered->min_pax = isset($request->min_pax[$tr]) ? $request->min_pax[$tr] : '';
                $tiered->max_pax = isset($request->max_pax[$tr]) ? $request->max_pax[$tr] : '';
                $tiered->tiered_price = isset($request->tiered_price[$tr]) ? $request->tiered_price[$tr] : '';
                $tiered->save();
                $tr++;
           }
       }
        if($request->has('itinerary_day')){
            $i = 0;
            foreach($request->itinerary_day as $day){
                $days = new ProgramItinerary();
                $days->program_id = $program->id;
                $days->day = $day;
                $days->distance  = isset($request->itinerary_distance[$i]) ? $request->itinerary_distance[$i] : '' ;
                $days->duration  = isset($request->itinerary_duration[$i]) ? $request->itinerary_duration[$i] : '' ;
                $days->altitude  = isset($request->itinerary_altitude[$i]) ? $request->itinerary_altitude[$i] : '' ;
                $days->description  = isset($request->itinerary_description[$i]) ? $request->itinerary_description[$i] : '' ;
                $days->accommodation  = isset($request->itinerary_accommodation[$i]) ? $request->itinerary_accommodation[$i] : '' ;
                $days->lunch  = isset($request->itinerary_lunch[$i]) ? $request->itinerary_lunch[$i] : 0 ;
                $days->breakfast  = isset($request->itinerary_breakfast[$i]) ? $request->itinerary_breakfast[$i] : 0 ;
                $days->dinner  = isset($request->itinerary_dinner[$i]) ? $request->itinerary_dinner[$i] : 0 ;
                $days->save();
                $i++;
            }
        }
        if($request->has('includes') || $request->has('excludes')){
             $c = 0;
            foreach($request->includes as $include){

                $cost = new ProgramCosting();
                $cost->program_id = $program->id;
                $cost->includes = $include;
                $cost->include_caption  = $request->include_caption[$c] != null ? $request->include_caption[$c] : '' ;
                $cost->excludes  = $request->excludes[$c] != null ? $request->excludes[$c] : '' ;
                $cost->exclude_caption  = $request->exclude_caption[$c] != null ? $request->exclude_caption[$c] : '' ;
                $cost->save();
                $c++;
            }
        }
        if($request->has('equipment_1')){
             $e = 0;
            foreach($request->equipment_1 as $equipment_1){
                $equipment = new ProgramSupport();
                $equipment->program_id = $program->id;
                // if($request->equipment_file[$e])
                //  {
                //     $equipment_file=$request->equipment_file[$e]->getClientOriginalName();
                //     $request->equipment_file[$e]->move(public_path().'/images/Equipments', $equipment_file);
                //      $equipment->file = $equipment_file;
                //  }else{
                //      $equipment->file = 1;
                //  }
                $equipment->equipment_1 = $equipment_1;
                $equipment->equipment_2  = isset($request->equipment_2[$e]) ? $request->equipment_2[$e] : '' ;
                $equipment->equipment_3  = isset($request->equipment_3[$e]) ? $request->equipment_3[$e] : '' ;
                $equipment->equipment_4  = isset($request->equipment_4[$e]) ? $request->equipment_4[$e] : '' ;
                $equipment->save();
                $e++;
            }
        }
         if($request->has('faq_question')){
             $f = 0;
            foreach($request->faq_question as $question){
                $faq = new ProgramFaq();
                $faq->program_id = $program->id;
                $faq->question = $question;
                $faq->answer  = $request->faq_answer[$f] != null ? $request->faq_answer[$f] : '' ;
                $faq->save();
                 $f++;
            }
        }

        if($request->has('addon_name')){
             $a = 0;
            foreach($request->addon_name as $addonName){

                $addon = new ProgramAddon();
                $addon->program_id = $program->id;
                $addon->name = $addonName;
                $addon->price  = $request->addon_price[$a] != null ? $request->addon_price[$a] : '' ;
                $addon->accommodates  = $request->addon_accommodates[$a] != null ? $request->addon_accommodates[$a] : '' ;
                $addon->save();
                $a++;
            }
        }
        if($request->has('discount_from')){
             $d = 0;
            foreach($request->discount_from as $discountfrom){

                $discount = new ProgramDiscount();
                $discount->program_id = $program->id;
                $discount->discount_from = $discountfrom;
                $discount->discount_until  = $request->discount_until[$d] != null ? $request->discount_until[$d] : '' ;
                $discount->discounts = $request->discounts[$d] != null ? $request->discounts[$d] : '' ;
                $discount->save();

                $d++;
            }
        }

           if($request->has('unavailable_from')){
             $u = 0;
            foreach($request->unavailable_from as $unavailablefrom){

                $unavailable = new ProgramUnavailable();
                $unavailable->program_id = $program->id;
                $unavailable->unavailable_from = $discountfrom;
                $unavailable->unavailable_until  = $request->unavailable_until[$u] != null ? $request->unavailable_until[$u] : '' ;
                $unavailable->save();
                 $u++;
            }
        }
        return back()->with('success','Program has been Successfully Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgramRequest  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgramRequest $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }

}
