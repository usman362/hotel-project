<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use App\Models\Destination;
use App\Models\WebUpdate;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::with('destination','icon_image','banner','thumbnail')->paginate(10);
        return view('pages.region.index', ['regions' => $regions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::all();
        return view('pages.region.add',compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegionRequest $request)
    {
        $request->validate([
            'title'=>'required',
            'url_slug'=> 'required',
        ]);

        $region = new Region();
        $region->title = $request->title;
        $region->destination_id = $request->destination_id;
        $region->url_slug = $request->url_slug;
        $region->description = $request->description;
        $region->banner_text = $request->banner_text;
        $region->meta_title = $request->meta_title;
        $region->meta_desc = $request->meta_desc;
        $region->meta_keywords = $request->meta_keywords;
        $region->thumbnail_image = $request->thumbnail_image;
        $region->banner_image = $request->banner_image;
        $region->save();
        $update = new WebUpdate();
        $update->activity = 'New Region has been Created';
        $update->save();
        return redirect(route('region.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $region = Region::find($id);
        $destinations = Destination::all();
        return view('pages.region.edit',compact('destinations','region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegionRequest  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegionRequest $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'url_slug'=> 'required',
        ]);
        $region = Region::find($id);
        $region->title = $request->title;
        $region->destination_id = $request->destination_id;
        $region->url_slug = $request->url_slug;
        $region->description = $request->description;
        $region->banner_text = $request->banner_text;
        $region->meta_title = $request->meta_title;
        $region->meta_desc = $request->meta_desc;
        $region->meta_keywords = $request->meta_keywords;
        $region->thumbnail_image = $request->thumbnail_image;
        $region->banner_image = $request->banner_image;
        $region->save();
        $update = new WebUpdate();
        $update->activity = 'New Region has been Updated';
        $update->save();
        return redirect(route('region.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region = Region::find($id)->delete();
        $update = new WebUpdate();
        $update->activity = 'Region has been Deleted';
        $update->save();
        return redirect(route('destination.index'));
    }
}
