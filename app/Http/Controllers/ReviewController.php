<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Activity;
use App\Models\Destination;
use App\Models\Program;
use App\Models\Region;
use App\Models\WebUpdate;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::paginate(10);
        return view('pages.review.index', ['reviews'=> $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activity::all();
        $destinations = Destination::all();
        $regions = Region::all();
        $programs = Program::all();
        return view('pages.review.add',compact('activities','destinations','regions','programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewRequest $request)
    {

        $page = new Review();
        $page->destination_id = $request->destination_id;
        $page->activity_id = $request->activity_id;
        $page->region_id = $request->region_id;
        $page->trip = $request->trip;
        $page->title = $request->title;
        $page->date = $request->date;
        $page->content = $request->content;
        $page->rating = $request->rating;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords = $request->meta_keywords;
        $page->avatar = $request->avatar;
        $page->save();
                $update = new WebUpdate();
        $update->activity = 'New Review has been Created';
        $update->save();

        return redirect(route('review.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        $activities = Activity::all();
        $destinations = Destination::all();
        $regions = Region::all();
        $programs = Program::all();
        return view('pages.review.edit', compact('activities','destinations','regions','review','programs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReviewRequest  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewRequest $request, $id)
    {
        $page = Review::find($id);
        $page->destination_id = $request->destination_id;
        $page->activity_id = $request->activity_id;
        $page->region_id = $request->region_id;
        $page->trip = $request->trip;
        $page->title = $request->title;
        $page->date = $request->date;
        $page->content = $request->content;
        $page->rating = $request->rating;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords = $request->meta_keywords;
        $page->avatar = $request->avatar;
        $page->save();
                $update = new WebUpdate();
        $update->activity = 'Review has been Updated';
        $update->save();
        return redirect(route('review.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review,$id)
    {
        if($review->find($id)->delete()){
            return redirect(route('review.index'));
                    $update = new WebUpdate();
        $update->activity = 'Review has been Deleted';
        $update->save();
        }
        return redirect(route('review.index'));
    }
}
