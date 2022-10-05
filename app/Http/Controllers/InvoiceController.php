<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoicePayment;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('pages.invoice.index',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.invoice.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = Invoice::create($request->all());
        if ($request->has('item')) {
            $i = 0;
            foreach ($request->item as $item) {
                $payment = new InvoicePayment();
                $payment->invoice_id = $invoice->id;
                $payment->item = $item;
                $payment->item_desc = $request->item_desc[$i];
                $payment->cost = $request->cost[$i];
                $payment->discount = $request->discount[$i];
                $payment->tax1 = $request->tax1[$i];
                $payment->tax2 = $request->tax2[$i];
                $payment->quantity = $request->quantity[$i];
                $payment->price = $request->price[$i];
                $payment->save();
                $i++;
            }
        }

        return redirect(route('invoice.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::find($id);
        return view('pages.invoice.edit',compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id)->update($request->all());
        if ($request->has('item')) {
            $paid = InvoicePayment::where('invoice_id',$id)->delete();
            $i = 0;
            foreach ($request->item as $item) {
                $payment = new InvoicePayment();
                $payment->invoice_id = $invoice->id;
                $payment->item = $item;
                $payment->item_desc = $request->item_desc[$i];
                $payment->cost = $request->cost[$i];
                $payment->discount = $request->discount[$i];
                $payment->tax1 = $request->tax1[$i];
                $payment->tax2 = $request->tax2[$i];
                $payment->quantity = $request->quantity[$i];
                $payment->price = $request->price[$i];
                $payment->save();
                $i++;
            }
        }
        return redirect(route('invoice.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = InvoicePayment::where('invoice_id',$id)->delete();
        $invoice = Invoice::find($id)->delete();
        return redirect(route('invoice.index'));
    }

    public function preview()
    {
        return view('pages.invoice.preview');
    }

    public function print()
    {
        return view('pages.invoice.print');
    }

}
