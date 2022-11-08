<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
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
        return view('pages.booking.add');
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
        return view('pages.booking.edit', ['booking'=> $booking]);
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
        $destination = Booking::find($id);
        $destination->lead_traveler = $request->l_t_name1.','. $request->l_t_name2;
        $destination->email = $request->l_t_email;
        $destination->phone = $request->l_t_phone;
        $destination->country = $request->country;
        $destination->date_of_birth = $request->l_t_date_birth;
        $destination->trip_name = $request->t_name;
        $destination->trip_duration = $request->t_duration;
        $destination->trip_date = $request->t_date;
        $destination->tour_type = $request->t_tour_type;
        $destination->no_of_travelers = $request->no_of_travelers;
        $travelers = [];
        foreach($request->traveler_name1 as $key => $val){
            $travelers[] = $val . ',' . $request->traveler_name2[$key];
        }
        $destination->travelers = implode('(,,)', $travelers);
        $destination->addon_name = $request->addon_name;
        $destination->no_of_addon = $request->no_of_addon;
        $destination->addon_price_per_person = $request->addon_price_per_item;
        $destination->addon_total_price = intval($request->no_of_addon)*intval($request->addon_price_per_item);
        $destination->notes = implode('(,,)', $request->notes);
        $destination->payment_method = $request->payment_method;
        $destination->price_per_person = $request->price_per_person;
        $destination->deposited_price = $request->deposit_per_person;
        $destination->balance_price = $request->price_per_person;
        $destination->booking_date = $request->booking_date;
        // $destination->booking_ref = $this->getRandomWord(6);
        $destination->status = $request->status;
        $destination->save();
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
