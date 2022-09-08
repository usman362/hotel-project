<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\WebUpdate;
class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();
        return view('pages.activity.index', ['activities'=> $activities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.activity.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityRequest $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $page = new Activity();
        $page->name = $request->name;
        $page->url_slug = $request->url_slug;
        $page->description = $request->description;
        $page->banner_text = $request->banner_text;
        // $page->profile_order = $request->profile_order;
        $page->meta_title = $request->meta_title;
        $page->meta_desc = $request->meta_desc;
        $page->meta_keywords = $request->meta_keywords;
        if($request->hasFile('icon')){
            $icon = $request->file('icon');
            $filename = time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('images'), $filename);
            $page->icon = $filename;
        }
        if($request->hasFile('thumbnail_image')){
            $thumbnail_image = $request->file('thumbnail_image');
            $filename = time() . '.' . $thumbnail_image->getClientOriginalExtension();
            $thumbnail_image->move(public_path('images'), $filename);
            $page->thumbnail_image = $filename;
        }
        if($request->hasFile('banner_image')){
            $banner_image = $request->file('banner_image');
            $filename = time() . '.' . $banner_image->getClientOriginalExtension();
            $banner_image->move(public_path('images'), $filename);
            $page->banner_image = $filename;
        }
        $page->save();
        $update = new WebUpdate();
        $update->activity = 'New Activity has been Created';
        $update->save();
        return redirect(route('activity.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('pages.activity.edit', ['activity'=> $activity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityRequest  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityRequest $request, $id)
    {
        $page = Activity::find($id);
        $page->name = $request->name;
        $page->url_slug = $request->url_slug;
        $page->description = $request->description;
        // $page->status = $request->status;
        // $page->profile_order = $request->profile_order;
        $page->meta_title = $request->meta_title;
        $page->meta_desc = $request->meta_desc;
        $page->meta_keywords = $request->meta_keywords;
        if($request->hasFile('icon')){
            $icon = $request->file('icon');
            $filename = time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('images'), $filename);
            $page->icon = $filename;
        }
        if($request->hasFile('thumbnail_image')){
            $thumbnail_image = $request->file('thumbnail_image');
            $filename = time() . '.' . $thumbnail_image->getClientOriginalExtension();
            $thumbnail_image->move(public_path('images'), $filename);
            $page->thumbnail_image = $filename;
        }
        if($request->hasFile('banner_image')){
            $banner_image = $request->file('banner_image');
            $filename = time() . '.' . $banner_image->getClientOriginalExtension();
            $banner_image->move(public_path('images'), $filename);
            $page->banner_image = $filename;
        }
        $page->save();
                $update = new WebUpdate();
        $update->activity = 'Activity has been Updated';
        $update->save();
        return redirect(route('activity.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity, $id)
    {
        if($activity->find($id)->delete()){
            return redirect(route('activity.index'));
            $update = new WebUpdate();
        $update->activity = 'Activity has been Deleted';
        $update->save();
        }
                
        return redirect(route('activity.index'));
    }
}
