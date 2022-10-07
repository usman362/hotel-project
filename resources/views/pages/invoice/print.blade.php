<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('partials.header')

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-invoice-print.css')}}">

@section('title','Invoice Print')
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="invoice-print p-3">
                    <div class="invoice-header d-flex justify-content-between flex-md-row flex-column pb-2">
                        <div>
                            <div class="d-flex mb-1">
                                <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                    <defs>
                                        <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                            <stop stop-color="#000000" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </linearGradient>
                                        <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                                <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                                <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <h3 class="text-primary fw-bold ms-1">Vuexy</h3>
                            </div>
                            <p class="mb-25">Office 149, 450 South Brand Brooklyn</p>
                            <p class="mb-25">San Diego County, CA 91905, USA</p>
                            <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                        </div>
                        <div class="mt-md-0 mt-2">
                            <h4 class="fw-bold text-end mb-1">INVOICE #{{$invoice->invoice_no}}</h4>
                            <div class="invoice-date-wrapper mb-50">
                                <span class="invoice-date-title">Date Issued:</span>
                                <span class="fw-bold"> {{$invoice->date}}</span>
                            </div>
                            <div class="invoice-date-wrapper">
                                <span class="invoice-date-title">Due Date:</span>
                                <span class="fw-bold">{{$invoice->due_date}}</span>
                            </div>
                        </div>
                    </div>

                    <hr class="my-2" />

                    <div class="row pb-2">
                        <div class="col-sm-6">
                            <h6 class="mb-2">Invoice To:</h6>
                            <h6 class="mb-25">{{$invoice->customer->name}}</h6>
                            <p class="card-text mb-25">{{$invoice->customer->address}}, {{$invoice->customer->country}}</p>
                            <p class="card-text mb-25">{{$invoice->customer->country}}</p>
                            <p class="card-text mb-0">{{$invoice->customer->contact}}</p>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-2">
                            <h6 class="mb-1">Payment Details:</h6>
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

                    <div class="table-responsive mt-2">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th class="py-1 ps-4">Task description</th>
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

                    <div class="row invoice-sales-total-wrapper mt-3">
                        <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                            <p class="card-text mb-0"><span class="fw-bold">Salesperson:</span> <span class="ms-75">{{$invoice->sales_person}}</span></p>
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

                    <hr class="my-2" />

                    <div class="row">
                        <div class="col-12">
                            <span class="fw-bold">Note:</span>
                            <span>{{$invoice->note}}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


   @include('partials.library')


   <script src="{{asset('app-assets/js/scripts/pages/app-invoice-print.js')}}"></script>

</body>
<!-- END: Body-->

</html>
