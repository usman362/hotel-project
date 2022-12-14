<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Models\DestinationWeather;
use App\Models\WebUpdate;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::with('banner','thumbnail')->paginate(10);
        return view('pages.destination.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.destination.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDestinationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDestinationRequest $request)
    {
        $destination = new Destination();
        $destination->title = $request->title;
        $destination->url_slug = $request->url_slug;
        $destination->description = $request->description;
        $destination->longitude = $request->longitude;
        $destination->latitude = $request->latitude;
        $destination->banner_text = $request->banner_text;
        $destination->widget_code = $request->widget_code;
        $destination->introduction = $request->introduction;
        $destination->meta_title = $request->meta_title;
        $destination->meta_desc = $request->meta_desc;
        $destination->meta_keywords = $request->meta_keywords;
        $destination->banner_image = $request->banner_image;
        $destination->thumbnail_image = $request->thumbnail_image;
        $destination->save();
        if($request->has('weather_title')){
            $i = 0;
            foreach($request->weather_title as $title){
                $weather = new DestinationWeather();
                $weather->destination_id = $destination->id;
                $weather->weather_title = isset($request->weather_title[$i]) ? $request->weather_title[$i] : '' ;
                $weather->weather_description = isset($request->weather_description[$i]) ? $request->weather_description[$i] : '';
                $weather->save();
                $i++;
            }
        }
        $update = new WebUpdate();
        $update->activity = 'New Destination has been Created';
        $update->save();
        return redirect(route('destination.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destination = Destination::find($id);
        return view('pages.destination.edit', ['destination'=> $destination]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDestinationRequest  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDestinationRequest $request,$id)
    {
        $destination = Destination::find($id);
        $destination->title = $request->title;
        $destination->url_slug = $request->url_slug;
        $destination->description = $request->description;
        $destination->longitude = $request->longitude;
        $destination->latitude = $request->latitude;
        $destination->banner_text = $request->banner_text;
        $destination->widget_code = $request->widget_code;
        $destination->introduction = $request->introduction;
        $destination->meta_title = $request->meta_title;
        $destination->meta_desc = $request->meta_desc;
        $destination->meta_keywords = $request->meta_keywords;
        $destination->banner_image = $request->banner_image;
        $destination->thumbnail_image = $request->thumbnail_image;
        $destination->save();
        if($request->has('weather_title')){

            $wea = DestinationWeather::where('destination_id',$destination->id)->delete();
            $i = 0;
            foreach($request->weather_title as $title){
                $weather = new DestinationWeather();
                $weather->destination_id = $destination->id;
                $weather->weather_title = isset($request->weather_title[$i]) ? $request->weather_title[$i] : '' ;
                $weather->weather_description = isset($request->weather_description[$i]) ? $request->weather_description[$i] : '';
                $weather->save();
                $i++;
            }
        }
        $update = new WebUpdate();
        $update->activity = 'Destination has been Updated';
        $update->save();
        return redirect(route('destination.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination,$id)
    {
        if($destination->find($id)->delete()){
            return redirect(route('destination.index'));
                    $update = new WebUpdate();
        $update->activity = 'Destination has been Deleted';
        $update->save();
        }

        return redirect(route('destination.index'));
    }
}
