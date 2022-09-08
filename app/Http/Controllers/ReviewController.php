<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
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
        $reviews = Review::all();
        return view('pages.review.index', ['reviews'=> $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.review.add');
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
        $page->destination_id = $request->destination;
        $page->activity_id = $request->activity;
        $page->region_id = $request->region;
        $page->trip = $request->trip;
        $page->title = $request->review_title;
        $page->name = $request->reviewer_name;
        $page->country = $request->country;
        $page->date = $request->date;
        $page->content = $request->content;
        $page->status = $request->status;
        $page->featured = $request->featured;
        $page->rating = $request->rating;
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('images'), $filename);
            $page->avatar = $filename;
        }
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
        return view('pages.review.edit', ['review'=> $review]);
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
        $page->destination_id = $request->destination;
        $page->activity_id = $request->activity;
        $page->region_id = $request->region;
        $page->trip = $request->trip;
        $page->title = $request->review_title;
        $page->name = $request->reviewer_name;
        $page->country = $request->country;
        $page->date = $request->date;
        $page->content = $request->content;
        $page->status = $request->status;
        $page->featured = $request->featured;
        $page->rating = $request->rating;
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('images'), $filename);
            $page->avatar = $filename;
        }
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
