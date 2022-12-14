@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-invoice.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
@endpush
@section('title','Invoice Preview')
@extends('layouts.app')
@section('content')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="invoice-preview-wrapper">
                <div class="row invoice-preview">
                    <!-- Invoice -->
                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card invoice-preview-card">
                            <div class="card-body invoice-padding pb-0">
                                <!-- Header starts -->
                                <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                    <div>
                                        <div class="logo-wrapper">
                                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                                <defs>
                                                    <linearGradient id="invoice-linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                                        <stop stop-color="#000000" offset="0%"></stop>
                                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="invoice-linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-400.000000, -178.000000)">
                                                        <g transform="translate(400.000000, 178.000000)">
                                                            <path class="text-primary" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                                            <path d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#invoice-linearGradient-1)" opacity="0.2"></path>
                                                            <polygon fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                            <polygon fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                            <polygon fill="url(#invoice-linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h3 class="text-primary invoice-logo">Vuexy</h3>
                                        </div>
                                        <p class="card-text mb-25">Office 149, 450 South Brand Brooklyn</p>
                                        <p class="card-text mb-25">San Diego County, CA 91905, USA</p>
                                        <p class="card-text mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                                    </div>
                                    <div class="mt-md-0 mt-2">
                                        <h4 class="invoice-title">
                                            Invoice
                                            <span class="invoice-number">#{{$invoice->invoice_no}}</span>
                                        </h4>
                                        <div class="invoice-date-wrapper">
                                            <p class="invoice-date-title">Date Issued:</p>
                                            <p class="invoice-date">{{$invoice->date}}</p>
                                        </div>
                                        <div class="invoice-date-wrapper">
                                            <p class="invoice-date-title">Due Date:</p>
                                            <p class="invoice-date">{{$invoice->due_date}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header ends -->
                            </div>

                            <hr class="invoice-spacing" />

                            <!-- Address and Contact starts -->
                            <div class="card-body invoice-padding pt-0">
                                <div class="row invoice-spacing">
                                    <div class="col-xl-8 p-0">
                                        <h6 class="mb-2">Invoice To:</h6>
                                        <h6 class="mb-25">{{$invoice->customer->name}}</h6>
                                        <p class="card-text mb-25">{{$invoice->customer->address}}, {{$invoice->customer->country}}</p>
                                        <p class="card-text mb-25">{{$invoice->customer->country}}</p>
                                        <p class="card-text mb-0">{{$invoice->customer->contact}}</p>
                                    </div>
                                    <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                        <h6 class="mb-2">Payment Details:</h6>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="pe-1">Total Due:</td>
                                                    <td><span class="fw-bold">${{$invoice->total_due}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-1">Bank name:</td>
                                                    <td>{{$invoice->bank_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-1">Country:</td>
                                                    <td>{{$invoice->country}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-1">IBAN:</td>
                                                    <td>{{$invoice->iban}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-1">SWIFT code:</td>
                                                    <td>{{$invoice->swift_code}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Address and Contact ends -->

                            <!-- Invoice Description starts -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="py-1">Task description</th>
                                            <th class="py-1">Rate</th>
                                            <th class="py-1">Qty</th>
                                            <th class="py-1">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($invoice->invoice_payments as $payment)

                                        <tr class="border-bottom">
                                            <td class="py-1">
                                                <p class="card-text fw-bold mb-25">{{$payment->item}}</p>
                                                <p class="card-text text-nowrap">
                                                    {{$payment->item_desc}}
                                                </p>
                                            </td>
                                            <td class="py-1">
                                                <span class="fw-bold">${{$payment->cost}}</span>
                                            </td>
                                            <td class="py-1">
                                                <span class="fw-bold">{{$payment->quantity}}</span>
                                            </td>
                                            <td class="py-1">
                                                <span class="fw-bold">${{$payment->cost * $payment->quantity}}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-body invoice-padding pb-0">
                                <div class="row invoice-sales-total-wrapper">
                                    <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                        <p class="card-text mb-0">
                                            <span class="fw-bold">Salesperson:</span> <span class="ms-75">{{$invoice->sales_person}}</span>
                                        </p>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                                        <div class="invoice-total-wrapper">
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">Subtotal:</p>
                                                <p class="invoice-total-amount">${{$invoice->invoice_payments->sum('price')}}</p>
                                            </div>
                                            @php
                                                $discount = $invoice->invoice_payments->sum('discount') ?? 0;
                                                $tax1 = $invoice->invoice_payments->sum('tax1') ?? 0;
                                                $tax2 = $invoice->invoice_payments->sum('tax2') ?? 0;
                                            @endphp
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">Discount:</p>
                                                <p class="invoice-total-amount">${{$discount}}</p>
                                            </div>
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">Tax:</p>
                                                <p class="invoice-total-amount">{{ $tax1 + $tax2}}%</p>
                                            </div>
                                            <hr class="my-50" />
                                            <div class="invoice-total-item">
                                                <p class="invoice-total-title">Total:</p>
                                                <p class="invoice-total-amount">${{$invoice->invoice_payments->sum('price') - ($discount + $tax1 + $tax2)}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Invoice Description ends -->

                            <hr class="invoice-spacing" />

                            <!-- Invoice Note starts -->
                            <div class="card-body invoice-padding pt-0">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fw-bold">Note:</span>
                                        <span>{{$invoice->note}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Invoice Note ends -->
                        </div>
                    </div>
                    <!-- /Invoice -->

                    <!-- Invoice Actions -->
                    <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary w-100 mb-75" data-bs-toggle="modal" data-bs-target="#send-invoice-sidebar">
                                    Send Invoice
                                </button>
                                <a href="{{route('invoice.pdf',$invoice->id)}}" class="btn btn-outline-secondary w-100 btn-download-invoice mb-75">Download</a>
                                <a class="btn btn-outline-secondary w-100 mb-75" href="{{route('invoice.print',$invoice->id)}}" target="_blank"> Print </a>
                                <a class="btn btn-outline-secondary w-100 mb-75" href="{{route('invoice.edit',$invoice->id)}}"> Edit </a>
                                <button type="button" class="btn btn-success w-100 add_payment" data-bs-toggle="modal" data-balance="{{$invoice->invoice_payments->sum('price') - ($discount + $tax1 + $tax2)}}"  data-bs-target="#add-payment-sidebar">
                                    Add Payment
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /Invoice Actions -->
                </div>
            </section>

            <!-- Send Invoice Sidebar -->
            <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
                <div class="modal-dialog sidebar-lg">
                    <div class="modal-content p-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">??</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title">
                                <span class="align-middle">Send Invoice</span>
                            </h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <form action="{{route('invoice.mail')}}" enctype="multipart/form-data">
                                <input type="hidden" name="invoice_id" id="">
                                <div class="mb-1">
                                    <label for="invoice-from" class="form-label">From</label>
                                    <input type="email" class="form-control" name="invoice_from" id="invoice_from" value="" placeholder="company@email.com" />
                                </div>
                                <div class="mb-1">
                                    <label for="invoice-to" class="form-label">To</label>
                                    <input type="email" class="form-control" name="invoice_to" id="invoice_to" value="" placeholder="company@email.com" />
                                </div>
                                <div class="mb-1">
                                    <label for="invoice-subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" name="invoice_subject" id="invoice_subject" value="" placeholder="Invoice regarding goods" />
                                </div>
                                <div class="mb-1">
                                    <label for="invoice-message" class="form-label">Message</label>
                                    <textarea class="form-control" name="invoice_message" id="invoice_message" cols="3" rows="11" placeholder="Message..."></textarea>
                                </div>
                                <div class="mb-1">
                                    <span class="badge badge-light-primary">
                                        <i data-feather="link" class="me-25"></i>
                                        <span class="align-middle">Invoice Attached</span>
                                    </span>
                                </div>
                                <div class="mb-1 d-flex flex-wrap mt-2">
                                    <button type="submit" class="btn btn-primary me-1" >Send</button>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Send Invoice Sidebar -->

            <!-- Add Payment Sidebar -->
            <div class="modal modal-slide-in fade" id="add-payment-sidebar" aria-hidden="true">
                <div class="modal-dialog sidebar-lg">
                    <div class="modal-content p-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">??</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title">
                                <span class="align-middle">Add Payment</span>
                            </h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <form action="{{route('invoice.payment')}}" method="POST">
                                @csrf
                                <input type="hidden" name="invoice_id" value="{{$invoice->id}}">
                                <div class="mb-1">
                                    <input id="balance" class="form-control" type="text" value="Invoice Balance: 5000.00" disabled />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="payment_amount">Payment Amount</label>
                                    <input id="payment_amount" name="payment_amount" class="form-control" type="number" placeholder="$1000" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="payment_date">Payment Date</label>
                                    <input id="payment_date" name="payment_date" class="form-control date-picker" type="text" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="payment_type">Payment Method</label>
                                    <select class="form-select" id="payment_type" name="payment_type">
                                        <option value="" selected disabled>Select payment method</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Bank Transfer">Bank Transfer</option>
                                        <option value="Debit">Debit</option>
                                        <option value="Credit">Credit</option>
                                        <option value="Paypal">Paypal</option>
                                    </select>
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="internal_payment_note">Internal Payment Note</label>
                                    <textarea class="form-control" id="internal_payment_note" name="internal_payment_note" rows="5" placeholder="Internal Payment Note"></textarea>
                                </div>
                                <div class="d-flex flex-wrap mb-0">
                                    <button type="submit" class="btn btn-primary me-1" >Send</button>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Add Payment Sidebar -->

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection

@push('scripts')

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/app-invoice.js')}}"></script>

    <script>
        $('.add_payment').click(function(){
            var balance = $(this).data('balance');
            $('#balance').val('Invoice Balance: '+balance);
        })
    </script>
@endpush
