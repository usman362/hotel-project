<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoicePayment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::with(['invoice_payments','customer'])->get();
        return view('pages.invoice.index',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('pages.invoice.add',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $invoice = Invoice::create([
            'invoice_no' => $request->invoice_no,
            'date' => Carbon::parse($request->date)->format('Y-m-d'),
            'due_date' => Carbon::parse($request->due_date)->format('Y-m-d'),
            'invoice_to' => $request->invoice_to,
            'total_due' => $request->total_due,
            'bank_name' => $request->bank_name,
            'country' => $request->country,
            'iban' => $request->iban,
            'swift_code' => $request->swift_code,
            'sales_person' => $request->sales_person,
            'note' => $request->note,
            'payment_type' => $request->payment_type,
            'payment_terms' => $request->payment_terms == true ? 1 : 0,
            'client_notes' => $request->client_notes == true ? 1 : 0,
            'payment_sub' => $request->payment_sub == true ? 1 : 0,
        ]);
        if ($request->has('item') && count($request->item)) {
            $i = 0;
            foreach ($request->item as $item) {
                $payment = new InvoicePayment();
                $payment->invoice_id = $invoice->id;
                $payment->item = $item;
                $payment->item_desc = $request->item_desc[$i] ? $request->item_desc[$i] : '';
                $payment->cost = $request->cost[$i] ? $request->cost[$i] : '';
                $payment->discount = $request->discount[$i] ? $request->discount[$i] : '';
                $payment->tax1 = $request->tax1[$i] ? $request->tax1[$i] : '';
                $payment->tax2 = $request->tax2[$i] ? $request->tax2[$i] : '';
                $payment->quantity = $request->quantity[$i] ? $request->quantity[$i] : '';
                $payment->price = $request->price[$i] ? $request->price[$i] : '';
                $payment->save();
                $i++;
            }
        }
        if($request->invoice_type == 'preview'){
            return redirect(route('invoice.preview',$invoice->id));
        }else if($request->invoice_type == 'send'){
            return redirect(route('invoice.index'));
        }else{
            return redirect(route('invoice.index'));
        }

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
        $invoice = Invoice::with(['invoice_payments','customer'])->find($id);
        $customers = Customer::all();
        return view('pages.invoice.edit',compact('invoice','customers'));
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
        $invoice = Invoice::find($id)->update([
            'invoice_no' => $request->invoice_no,
            'date' => Carbon::parse($request->date)->format('Y-m-d'),
            'due_date' => Carbon::parse($request->due_date)->format('Y-m-d'),
            'invoice_to' => $request->invoice_to,
            'total_due' => $request->total_due,
            'bank_name' => $request->bank_name,
            'country' => $request->country,
            'iban' => $request->iban,
            'swift_code' => $request->swift_code,
            'sales_person' => $request->sales_person,
            'note' => $request->note,
            'payment_type' => $request->payment_type,
            'payment_terms' => $request->payment_terms == true ? 1 : 0,
            'client_notes' => $request->client_notes == true ? 1 : 0,
            'payment_sub' => $request->payment_sub == true ? 1 : 0,
        ]);
        if ($request->has('item') && count($request->item)) {
            $paid = InvoicePayment::where('invoice_id',$id)->delete();
            $i = 0;
            foreach ($request->item as $item) {
                $payment = new InvoicePayment();
                $payment->invoice_id = $id;
                $payment->item = $item;
                $payment->item_desc = $request->item_desc[$i] ? $request->item_desc[$i] : '';
                $payment->cost = $request->cost[$i] ? $request->cost[$i] : '';
                $payment->discount = $request->discount[$i] ? $request->discount[$i] : '';
                $payment->tax1 = $request->tax1[$i] ? $request->tax1[$i] : '';
                $payment->tax2 = $request->tax2[$i] ? $request->tax2[$i] : '';
                $payment->quantity = $request->quantity[$i] ? $request->quantity[$i] : '';
                $payment->price = $request->price[$i] ? $request->price[$i] : '';
                $payment->save();
                $i++;
            }
        }
        if($request->invoice_type == 'preview'){
            return redirect(route('invoice.preview',$id));
        }else if($request->invoice_type == 'send'){
            return redirect(route('invoice.index'));
        }else{
            return redirect(route('invoice.index'));
        }

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

    public function preview($id)
    {
        $invoice = Invoice::with(['invoice_payments','customer'])->find($id);

        return view('pages.invoice.preview',compact('invoice'));
    }

    public function print($id)
    {
        $invoice = Invoice::with(['invoice_payments','customer'])->find($id);
        return view('pages.invoice.print',compact('invoice'));
    }

    public function store_payment(Request $request){
        $invoice = Invoice::find($request->invoice_id);
        $invoice->payment_amount = $request->payment_amount;
        $invoice->payment_date = $request->payment_date;
        $invoice->payment_type = $request->payment_type;
        $invoice->internal_payment_note = $request->internal_payment_note;
        $invoice->save();
        return back()->with('success','Payment has been Added Successfully');
    }

    public function pdf($id)
    {
        $invoice = Invoice::with(['invoice_payments','customer'])->find($id);
        $data = ['invoice' => $invoice];
        $pdf = PDF::loadView('pages.invoice.download', $data)->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('invoice.pdf');
    }

    public function mail(Request $request){
        dd($request->invoice_message);
    }
}
