<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
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
        $regions = Region::all();
        return view('pages.region.index', ['regions' => $regions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.region.add');
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
        $region->meta_title = $request->meta_title;
        $region->meta_desc = $request->meta_desc;
        $region->meta_keywords = $request->meta_keywords;
        if($request->hasFile('thumbnail_image')){
            $thumbnail_image = $request->file('thumbnail_image');
            $filename = time() . '.' . $thumbnail_image->getClientOriginalExtension();
            $thumbnail_image->move(public_path('images'), $filename);
            $region->thumbnail_image = $filename;
        }
        if($request->hasFile('banner_image')){
            $banner_image = $request->file('banner_image');
            $filename = time() . '.' . $banner_image->getClientOriginalExtension();
            $banner_image->move(public_path('images'), $filename);
            $region->banner_image = $filename;
        }
        $region->save();
                $update = new WebUpdate();
        $update->activity = 'New Activity has been Created';
        $update->save();
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
        return view('pages.region.edit', ['region'=> $region]);
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
        $region = Region::find($id);
        $region->title = $request->title;
        $region->destination_id = $request->destination_id;
        $region->url_slug = $request->url_slug;
        $region->description = $request->description;
        $region->meta_title = $request->meta_title;
        $region->meta_desc = $request->meta_desc;
        $region->meta_keywords = $request->meta_keywords;
        if($request->hasFile('thumbnail_image')){
            $thumbnail_image = $request->file('thumbnail_image');
            $filename = time() . '.' . $thumbnail_image->getClientOriginalExtension();
            $thumbnail_image->move(public_path('images'), $filename);
            $region->thumbnail_image = $filename;
        }
        if($request->hasFile('banner_image')){
            $banner_image = $request->file('banner_image');
            $filename = time() . '.' . $banner_image->getClientOriginalExtension();
            $banner_image->move(public_path('images'), $filename);
            $region->banner_image = $filename;
        }
        $region->save();
                $update = new WebUpdate();
        $update->activity = 'Region has been Updated';
        $update->save();
        return redirect(route('region.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region, $id)
    {
        if($destination->find($id)->delete()){
            return redirect(route('destination.index'));
                    $update = new WebUpdate();
        $update->activity = 'Region has been Deleted';
        $update->save();
        }
        return redirect(route('destination.index'));
    }
}