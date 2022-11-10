<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\WebUpdate;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $bookings = Booking::all();
        return view('pages.booking.index', ['bookings'=> $bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = Program::all();
        return view('pages.booking.add',compact('tours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        $booking = new Booking();
        $booking->tour_id = $request->tour_id;
        $booking->custom_tour_name = $request->custom_tour_name;
        $booking->start_date = $request->start_date;
        $booking->reference = $request->reference;
        $booking->booking_date = $request->booking_date;
        $booking->lead_customer_name = $request->lead_customer_name;
        $booking->phone = $request->phone;
        $booking->no_of_people = $request->no_of_people;
        $booking->email = $request->email;
        $booking->country = $request->country;
        $booking->duration = $request->duration;
        $booking->price_per_person = $request->price_per_person;
        $booking->deposit = $request->deposit;
        $booking->itinerary = $request->itinerary;
        $booking->cost_includes = $request->cost_includes;
        $booking->cost_excludes = $request->cost_excludes;
        $booking->admin_notes = $request->admin_notes;
        $booking->save();
        $update = new WebUpdate();
        $update->activity = 'New Booking has been Created';
        $update->save();
        return redirect(route('bookings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);
        return view('pages.booking.show',compact('booking') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        $tours = Program::all();
        return view('pages.booking.edit', compact('booking','tours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, $id)
    {
        $booking = Booking::find($id);
        $booking->tour_id = $request->tour_id;
        $booking->custom_tour_name = $request->custom_tour_name;
        $booking->start_date = $request->start_date;
        $booking->reference = $request->reference;
        $booking->booking_date = $request->booking_date;
        $booking->lead_customer_name = $request->lead_customer_name;
        $booking->phone = $request->phone;
        $booking->no_of_people = $request->no_of_people;
        $booking->email = $request->email;
        $booking->country = $request->country;
        $booking->duration = $request->duration;
        $booking->price_per_person = $request->price_per_person;
        $booking->deposit = $request->deposit;
        $booking->itinerary = $request->itinerary;
        $booking->cost_includes = $request->cost_includes;
        $booking->cost_excludes = $request->cost_excludes;
        $booking->admin_notes = $request->admin_notes;
        $booking->save();
        $update = new WebUpdate();
        $update->activity = 'Booking has been Updated';
        $update->save();
        return redirect(route('bookings.index'));
    }

    function getRandomWord($len = 6) {
        $word = array_merge(range('a', 'z'), range('A', 'Z'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking, $id)
    {
        if($booking->find($id)->delete()){
            return redirect(route('bookings.index'));
             $update = new WebUpdate();
        $update->activity = 'Booking has been Deleted';
        $update->save();
        }

        return redirect(route('bookings.index'));
    }
}
