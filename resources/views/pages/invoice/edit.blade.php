@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-invoice.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
@endpush
@section('title','Edit Invoice')
@extends('layouts.app')
@section('content')

<div class="app-content content ">

    @if(session()->has('success'))
<div class="alert alert-primary pd-4" role="alert">
{{ session()->get('success') }}
</div>
@endif
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="invoice-add-wrapper">
                <form action="{{route('invoice.update',$invoice->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="invoice_type" id="invoice_type">
                    <div class="row invoice-add">
                    <!-- Invoice Add Left starts -->
                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card invoice-preview-card">
                            <!-- Header starts -->
                            <div class="card-body invoice-padding pb-0">
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
                                    <div class="invoice-number-date mt-md-0 mt-2">
                                        <div class="d-flex align-items-center justify-content-md-end mb-1">
                                            <h4 class="invoice-title">Invoice</h4>
                                            <div class="input-group input-group-merge invoice-edit-input-group">
                                                <div class="input-group-text">
                                                    <i data-feather="hash"></i>
                                                </div>
                                                <input type="number" name="invoice_no" class="form-control invoice-edit-input" placeholder="53634" value="{{$invoice->invoice_no}}" />
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="title">Date:</span>
                                            <input type="text" name="date" class="form-control invoice-edit-input flatpickr-basic"  value="{{$invoice->date}}"/>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="title">Due Date:</span>
                                            <input type="text" name="due_date" class="form-control invoice-edit-input flatpickr-basic" value="{{$invoice->due_date}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Header ends -->

                            <hr class="invoice-spacing" />

                            <!-- Address and Contact starts -->
                            <div class="card-body invoice-padding pt-0">
                                <div class="row row-bill-to invoice-spacing">
                                    <div class="col-xl-8 mb-lg-1 col-bill-to ps-0">
                                        <h6 class="invoice-to-title">Invoice To:</h6>
                                        <div class="invoice-customer">
                                            <select class="invoiceto form-select" name="invoice_to">
                                                <option></option>
                                                @foreach ($customers as $key => $customer)

                                                <option value="{{$customer->id}}" @selected($invoice->customer->id ?? '' == $customer->id)>{{$customer->name}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="customer-details mt-1">
                                            @if (isset($invoice->customer))
                                            <p class="mb-25">{{$invoice->customer->name}}</p>
                                            <p class="mb-25">{{$invoice->customer->address}}</p>
                                            <p class="mb-25">{{$invoice->customer->country}}</p>
                                            <p class="mb-0">Tel: {{$invoice->customer->contact}}</p>
                                            <p class="mb-0">{{$invoice->customer->email}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-4 p-0 ps-xl-2 mt-xl-0 mt-2">
                                        <h6 class="mb-2">Payment Details:</h6>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="pe-1">Total Due:</td>
                                                    <td>
                                                        <div class="input-group input-group-merge invoice-edit-input-group">
                                                            <div class="input-group-text">
                                                                $
                                                            </div>
                                                            <input type="number" class="form-control invoice-edit-input" name="total_due" placeholder="23" value="{{$invoice->total_due}}" />
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-1">Bank name:</td>
                                                    <td><input type="text" class="form-control invoice-edit-input" name="bank_name" value="{{$invoice->bank_name}}" placeholder="American Bank" /></td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-1">Country:</td>
                                                    <td><input type="text" class="form-control invoice-edit-input" name="country" value="{{$invoice->country}}" placeholder="United States" /></td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-1">IBAN:</td>
                                                    <td><input type="text" class="form-control invoice-edit-input" name="iban" value="{{$invoice->iban}}" placeholder="ETD95476213874685" /></td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-1">SWIFT code:</td>
                                                    <td><input type="text" class="form-control invoice-edit-input" name="swift_code" value="{{$invoice->swift_code}}" placeholder="BR91905" /></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Address and Contact ends -->

                            <!-- Product Details starts -->
                            <div class="card-body invoice-padding invoice-product-details">
                                <div class="source-item">
                                    <div >
                                        <div class="repeater-wrapper invoice_item" >

                                            @forelse ($invoice->invoice_payments as $key => $payment)
                                            <div class="row">
                                                <input type="hidden" id="total_items" value="{{count($invoice->invoice_payments)}}">
                                                <div class="col-12 d-flex product-details-border position-relative pe-0">
                                                    <div class="row w-100 pe-lg-0 pe-1 py-2">
                                                        <div class="col-lg-5 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                                                            <p class="card-text col-title mb-md-50 mb-0">Item</p>
                                                            <select class="form-select item-details" name="item[]">
                                                                <option value="App Design" @selected($payment->item == 'App Design')>App Design</option>
                                                                <option value="App Customization" @selected($payment->item == 'App Customization')>App Customization</option>
                                                                <option value="ABC Template" @selected($payment->item == 'ABC Template')>ABC Template</option>
                                                                <option value="App Development" @selected($payment->item == 'App Development')>App Development</option>
                                                            </select>
                                                            <textarea class="form-control mt-2" name="item_desc[]" rows="1" placeholder="Customization & Bug Fixes">{{$payment->item_desc}}</textarea>
                                                        </div>
                                                        <div class="col-lg-3 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Cost</p>
                                                            <input type="number" class="form-control cost{{$key}}" onkeyup="itemFunction({{$key}})" name="cost[]" value="{{$payment->cost}}" placeholder="24" />
                                                            <div class="mt-2">
                                                                <span>Discount:</span>
                                                                <span class="discount discount_text{{$key}}">{{$payment->discount ?? 0}}%</span>
                                                                <span class="tax-1 ms-50 tax1_text{{$key}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1">{{$payment->tax1 ?? 0}}%</span>
                                                                <span class="tax-2 ms-50 tax2_text{{$key}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2">{{$payment->tax2 ?? 0}}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Qty</p>
                                                            <input type="number"  name="quantity[]" onkeyup="itemFunction({{$key}})" class="form-control qty{{$key}}" value="{{$payment->quantity}}" placeholder="1" />
                                                        </div>
                                                        <div class="col-lg-2 col-12 mt-lg-0 mt-2">
                                                            <p class="card-text col-title mb-md-50 mb-0">Price</p>
                                                            <p class="card-text mb-0 price_text{{$key}}">${{$payment->price}}</p>
                                                            <input type="hidden" class="price_val{{$key}}" name="price[]" value="{{$payment->price}}">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column align-items-center justify-content-between border-start invoice-product-actions py-50 px-25">
                                                         <i data-feather="x" class="cursor-pointer font-medium-3" onclick="removeItem({{$key}})" data-repeater-delete></i>
                                                        <div class="dropdown">
                                                            <i class="cursor-pointer more-options-dropdown me-0" data-feather="settings" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </i>
                                                            <div class="dropdown-menu dropdown-menu-end item-options-menu p-50" aria-labelledby="dropdownMenuButton">
                                                                <div class="mb-1">
                                                                    <label for="discount-input" class="form-label">Discount(%)</label>
                                                                    <input type="number" class="form-control discount_val{{$key}}" value="{{$payment->discount}}" name="discount[]" id="discount-input" />
                                                                </div>
                                                                <div class="form-row mt-50">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label for="tax-1-input" class="form-label">Tax 1</label>
                                                                        <select name="tax1[]" id="tax-1-input" class="form-select tax-select tax1_val{{$key}}">
                                                                            <option value="0" @selected($payment->tax1 == '0')>0%</option>
                                                                            <option value="1" @selected($payment->tax1 == '1')>1%</option>
                                                                            <option value="10" @selected($payment->tax1 == '10')>10%</option>
                                                                            <option value="18" @selected($payment->tax1 == '18')>18%</option>
                                                                            <option value="40" @selected($payment->tax1 == '40')>40%</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label for="tax-2-input" class="form-label">Tax 2</label>
                                                                        <select name="tax2[]" id="tax-2-input" class="form-select tax-select tax2_val{{$key}}">
                                                                            <option value="0" @selected($payment->tax2 == '0')>0%</option>
                                                                            <option value="1" @selected($payment->tax2 == '1')>1%</option>
                                                                            <option value="10" @selected($payment->tax2 == '10')>10%</option>
                                                                            <option value="18" @selected($payment->tax2 == '18')>18%</option>
                                                                            <option value="40" @selected($payment->tax2 == '40')>40%</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-divider my-1"></div>
                                                                <div class="d-flex justify-content-between">
                                                                    <button type="button" class="btn btn-outline-primary btn-apply-changes" onclick="itemFunction({{$key}})">Apply</button>
                                                                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            <div class="row">
                                                <input type="hidden" id="total_items" value="0">
                                                <div class="col-12 d-flex product-details-border position-relative pe-0">
                                                    <div class="row w-100 pe-lg-0 pe-1 py-2">
                                                        <div class="col-lg-5 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                                                            <p class="card-text col-title mb-md-50 mb-0">Item</p>
                                                            <select class="form-select item-details" name="item[]">
                                                                <option value="App Design">App Design</option>
                                                                <option value="App Customization" selected>App Customization</option>
                                                                <option value="ABC Template">ABC Template</option>
                                                                <option value="App Development">App Development</option>
                                                            </select>
                                                            <textarea class="form-control mt-2" name="item_desc[]" rows="1" placeholder="Customization & Bug Fixes"></textarea>
                                                        </div>
                                                        <div class="col-lg-3 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Cost</p>
                                                            <input type="number" class="form-control cost0" onkeyup="itemFunction(0)" name="cost[]" value="" placeholder="24" />
                                                            <div class="mt-2">
                                                                <span>Discount:</span>
                                                                <span class="discount discount_text0">0%</span>
                                                                <span class="tax-1 ms-50 tax1_text0" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1">0%</span>
                                                                <span class="tax-2 ms-50 tax2_text0" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2">0%</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-12 my-lg-0 my-2">
                                                            <p class="card-text col-title mb-md-2 mb-0">Qty</p>
                                                            <input type="number"  name="quantity[]" onkeyup="itemFunction(0)" class="form-control qty0" value="" placeholder="1" />
                                                        </div>
                                                        <div class="col-lg-2 col-12 mt-lg-0 mt-2">
                                                            <p class="card-text col-title mb-md-50 mb-0">Price</p>
                                                            <p class="card-text mb-0 price_text0">$0</p>
                                                            <input type="hidden" class="price_val0" name="price[]" >
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column align-items-center justify-content-between border-start invoice-product-actions py-50 px-25">
                                                        {{-- <i data-feather="x" class="cursor-pointer font-medium-3" data-repeater-delete></i> --}}
                                                        <div class="dropdown">
                                                            <i class="cursor-pointer more-options-dropdown me-0" data-feather="settings" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </i>
                                                            <div class="dropdown-menu dropdown-menu-end item-options-menu p-50" aria-labelledby="dropdownMenuButton">
                                                                <div class="mb-1">
                                                                    <label for="discount-input" class="form-label">Discount(%)</label>
                                                                    <input type="number" class="form-control discount_val0" name="discount[]" id="discount-input" />
                                                                </div>
                                                                <div class="form-row mt-50">
                                                                    <div class="mb-1 col-md-6">
                                                                        <label for="tax-1-input" class="form-label">Tax 1</label>
                                                                        <select name="tax1[]" id="tax-1-input" class="form-select tax-select tax1_val0">
                                                                            <option value="0" selected>0%</option>
                                                                            <option value="1">1%</option>
                                                                            <option value="10">10%</option>
                                                                            <option value="18">18%</option>
                                                                            <option value="40">40%</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-1 col-md-6">
                                                                        <label for="tax-2-input" class="form-label">Tax 2</label>
                                                                        <select name="tax2[]" id="tax-2-input" class="form-select tax-select tax2_val0">
                                                                            <option value="0" selected>0%</option>
                                                                            <option value="1">1%</option>
                                                                            <option value="10">10%</option>
                                                                            <option value="18">18%</option>
                                                                            <option value="40">40%</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-divider my-1"></div>
                                                                <div class="d-flex justify-content-between">
                                                                    <button type="button" class="btn btn-outline-primary btn-apply-changes" onclick="itemFunction(0)">Apply</button>
                                                                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforelse

                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-12 px-0">
                                            <button type="button" class="btn btn-primary add_item btn-sm btn-add-new" data-repeater-create>
                                                <i data-feather="plus" class="me-25"></i>
                                                <span class="align-middle">Add Item</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Details ends -->

                            <!-- Invoice Total starts -->
                            <div class="card-body invoice-padding">
                                <div class="row invoice-sales-total-wrapper">
                                    <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                        <div class="d-flex align-items-center mb-1">
                                            <label for="salesperson" class="form-label">Salesperson:</label>
                                            <input type="text" class="form-control ms-50" id="salesperson" name="sales_person" placeholder="Edward Crowley" value="{{$invoice->sales_person}}"/>
                                        </div>
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
                            <!-- Invoice Total ends -->

                            <hr class="invoice-spacing mt-0" />

                            <div class="card-body invoice-padding py-0">
                                <!-- Invoice Note starts -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label for="note" class="form-label fw-bold">Note:</label>
                                            <textarea class="form-control" rows="2" name="note" id="note">{{$invoice->note}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Invoice Note ends -->
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Add Left ends -->

                    <!-- Invoice Add Right starts -->
                    <div class="col-xl-3 col-md-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary w-100 mb-75" data-bs-toggle="modal" data-bs-target="#send-invoice-sidebar">
                                    Send Invoice
                                </button>
                                <button type="submit" class="btn btn-outline-primary w-100 mb-75 preview_invoice">Preview</a>
                                <button type="submit" class="btn btn-outline-primary w-100 mb-75">Save</button>
                                <button type="button" class="btn btn-success w-100 add_payment" data-bs-toggle="modal" data-balance="{{$invoice->invoice_payments->sum('price') - ($discount + $tax1 + $tax2)}}"  data-bs-target="#add-payment-sidebar">
                                    Add Payment
                                </button>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="mb-50">Accept payments via</p>
                            <select class="form-select" name="payment_type">
                                <option value="Bank Account" @selected($invoice->payment_type == 'Bank Account')>Bank Account</option>
                                <option value="Paypal" @selected($invoice->payment_type == 'Paypal')>Paypal</option>
                                <option value="UPI Transfer" @selected($invoice->payment_type == 'UPI Transfer')>UPI Transfer</option>
                            </select>
                            <div class="invoice-terms mt-1">
                                <div class="d-flex justify-content-between">
                                    <label class="invoice-terms-title mb-0" for="paymentTerms">Payment Terms</label>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" name="payment_terms" @checked($invoice->payment_terms == true) id="paymentTerms" />
                                        <label class="form-check-label" for="paymentTerms"></label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-1">
                                    <label class="invoice-terms-title mb-0" for="clientNotes">Client Notes</label>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" name="client_notes" @checked($invoice->client_notes == true) id="clientNotes" />
                                        <label class="form-check-label" for="clientNotes"></label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label class="invoice-terms-title mb-0" for="paymentStub">Payment Stub</label>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" name="payment_sub" @checked($invoice->payment_sub == true) id="paymentStub" />
                                        <label class="form-check-label" for="paymentStub"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Add Right ends -->

                </div>
            </form>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->

 <!-- Add New Customer Sidebar -->
 <div class="modal modal-slide-in fade" id="add-new-customer-sidebar" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">
                    <span class="align-middle">Add Customer</span>
                </h5>
            </div>
            <div class="modal-body flex-grow-1">
                <form method="post" id="customer_form" enctype="multipart/form-data">
                   @csrf
                    <div class="mb-1">
                        <label for="customer-name" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customer-name" name="name" placeholder="John Doe" />
                    </div>
                    <div class="mb-1">
                        <label for="customer-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="customer-email" name="email" placeholder="example@domain.com" />
                    </div>
                    <div class="mb-1">
                        <label for="customer-address" class="form-label">Customer Address</label>
                        <textarea class="form-control" id="customer-address" name="address" cols="2" rows="2" placeholder="1307 Lady Bug Drive New York"></textarea>
                    </div>
                    <div class="mb-1 position-relative">
                        <label for="customer-country" class="form-label">Country</label>
                        <select class="form-select" id="customer-country" name="country">
                            <option label="select country"></option>
                            <option value="Australia">Australia</option>
                            <option value="Canada">Canada</option>
                            <option value="Russia">Russia</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United States of America">United States of America</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <label for="customer-contact" class="form-label">Contact</label>
                        <input type="number" class="form-control" id="customer-contact" name="contact" placeholder="763-242-9206" />
                    </div>
                    <div class="mb-1 d-flex flex-wrap mt-2">
                        <button type="submit" class="btn btn-primary me-1 add_customer" data-bs-dismiss="modal">Add</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add New Customer Sidebar -->

 <!-- Send Invoice Sidebar -->
 <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">
                    <span class="align-middle">Send Invoice</span>
                </h5>
            </div>
            <div class="modal-body flex-grow-1">
                <form>
                    <div class="mb-1">
                        <label for="invoice-from" class="form-label">From</label>
                        <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com" />
                    </div>
                    <div class="mb-1">
                        <label for="invoice-to" class="form-label">To</label>
                        <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com" />
                    </div>
                    <div class="mb-1">
                        <label for="invoice-subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods" />
                    </div>
                    <div class="mb-1">
                        <label for="invoice-message" class="form-label">Message</label>
                        <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="11" placeholder="Message...">Dear Queen Consolidated,

Thank you for your business, always a pleasure to work with you!

We have generated a new invoice in the amount of $95.59

We would appreciate payment of this invoice by 05/11/2019</textarea>
                    </div>
                    <div class="mb-1">
                        <span class="badge badge-light-primary">
                            <i data-feather="link" class="me-25"></i>
                            <span class="align-middle">Invoice Attached</span>
                        </span>
                    </div>
                    <div class="mb-1 d-flex flex-wrap mt-2">
                        <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Send</button>
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
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
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

@endsection

@push('scripts')

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/app-invoice.js')}}"></script>

<script>
    var i = $('#total_items').val();
    $('.add_item').click(function(){
        i++;
        $('.invoice_item').append(`
        <div class="row mt-4 item-child`+i+`">
        <div class="col-12 d-flex product-details-border position-relative pe-0">
            <div class="row w-100 pe-lg-0 pe-1 py-2">
                <div class="col-lg-5 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                    <p class="card-text col-title mb-md-50 mb-0">Item</p>
                    <select class="form-select item-details" name="item[]">
                        <option value="App Design">App Design</option>
                        <option value="App Customization" selected>App Customization</option>
                        <option value="ABC Template">ABC Template</option>
                        <option value="App Development">App Development</option>
                    </select>
                    <textarea class="form-control mt-2" name="item_desc[]" rows="1" placeholder="Customization & Bug Fixes"></textarea>
                </div>
                <div class="col-lg-3 col-12 my-lg-0 my-2">
                    <p class="card-text col-title mb-md-2 mb-0">Cost</p>
                    <input type="number" class="form-control cost`+i+`" onkeyup="itemFunction(`+i+`)" name="cost[]" value="" placeholder="24" />
                    <div class="mt-2">
                        <span>Discount:</span>
                        <span class="discount discount_text`+i+`">0%</span>
                        <span class="tax-1 ms-50 tax1_text`+i+`" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1">0%</span>
                        <span class="tax-2 ms-50 tax2_text`+i+`" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2">0%</span>
                    </div>
                </div>
                <div class="col-lg-2 col-12 my-lg-0 my-2">
                    <p class="card-text col-title mb-md-2 mb-0">Qty</p>
                    <input type="number"  name="quantity[]" onkeyup="itemFunction(`+i+`)" class="form-control qty`+i+`" value="" placeholder="1" />
                </div>
                <div class="col-lg-2 col-12 mt-lg-0 mt-2">
                    <p class="card-text col-title mb-md-50 mb-0">Price</p>
                    <p class="card-text mb-0 price_text`+i+`">$0</p>
                    <input type="hidden" class="price_val`+i+`" name="price[]" >
                </div>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-between border-start invoice-product-actions py-50 px-25">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="removeItem(`+i+`)" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer font-medium-3" data-repeater-delete=""><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                <div class="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings cursor-pointer more-options-dropdown me-0" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    <div class="dropdown-menu dropdown-menu-end item-options-menu p-50" aria-labelledby="dropdownMenuButton">
                        <div class="mb-1">
                            <label for="discount-input" class="form-label">Discount(%)</label>
                            <input type="number" class="form-control discount_val`+i+`" name="discount[]" id="discount-input" />
                        </div>
                        <div class="form-row mt-50">
                            <div class="mb-1 col-md-6">
                                <label for="tax-1-input" class="form-label">Tax 1</label>
                                <select  name="tax1[]" id="tax-1-input" class="form-select tax-select tax1_val`+i+`">
                                    <option value="0" selected>0%</option>
                                    <option value="1">1%</option>
                                    <option value="10">10%</option>
                                    <option value="18">18%</option>
                                    <option value="40">40%</option>
                                </select>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label for="tax-2-input" class="form-label">Tax 2</label>
                                <select  name="tax2[]" id="tax-2-input" class="form-select tax-select tax2_val`+i+`">
                                    <option value="0" selected>0%</option>
                                    <option value="1">1%</option>
                                    <option value="10">10%</option>
                                    <option value="18">18%</option>
                                    <option value="40">40%</option>
                                </select>
                            </div>
                        </div>
                        <div class="dropdown-divider my-1"></div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-primary btn-apply-changes" onclick="itemFunction(`+i+`)">Apply</button>
                            <button type="button" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        `)
    });

    $('.preview_invoice').click(function(){
        $('#invoice_type').val('preview');
    });

    $('.send_invoice').click(function(){
        $('#invoice_type').val('send');
    });

    function itemFunction(id){
        var cost = $('.cost'+id).val();
        var qty = $('.qty'+id).val();
        var discount_val = $('.discount_val'+id).val();
        if(discount_val == ''){discount_val = 0;}
        var tax1_val = $('.tax1_val'+id).val();
        var tax2_val = $('.tax2_val'+id).val();
        var total = cost * qty
        $('.discount_text'+id).text(discount_val+'%');
        $('.tax1_text'+id).text(tax1_val+'%');
        $('.tax2_text'+id).text(tax2_val+'%');
        var charges = parseInt(discount_val) + parseInt(tax1_val) + parseInt(tax2_val);
        $('.price_val'+id).val(total);
        $('.price_text'+id).text('$'+total);

        var totalAmount = 0;
        var totalDiscount = 0;
        var totalTax = 0;
        $("input[name='price[]']").each(function(){
            totalAmount += +$(this).val()
        $('.invoice-total-amount').text('$'+totalAmount);
         });

         $("input[name='discount[]']").each(function(){
            totalDiscount += +$(this).val()
        $('.invoice-total-discount').text('$'+totalDiscount);
         });

         $("select[name='tax1[]'], select[name='tax2[]']").each(function(){
            totalTax += +$(this).val()
        $('.invoice-total-tax').text(totalTax+'%');
         });
         var Total = totalAmount - (totalDiscount + totalTax)
         $('.invoice-total').text('$'+Total)
    }

    function removeItem(id){
       $('.item-child'+id).remove();
    }

$('#customer_form').submit(function(e){
    e.preventDefault();
    $.ajax({
   url:"{{ route('customers.store') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    $('#customer_form')[0].reset();
    console.log(data)
    $('.invoiceto').append(`
    <option value="`+data.id+`">`+data.name+`</option>
    `)
   }
  })
});


$('.invoiceto').change(function(){
var customer_id = $(this).val();
//console.log(customer_id);
$.ajax({
    url:"{{route('get.Customer')}}",
    method:"GET",
    dataType:'JSON',
    data: {customer:customer_id},
    success:function(data)
   {
   $('.customer-details').html(
    `   <p class="mb-25">`+data.name+`</p>
        <p class="mb-25">`+data.address+`</p>
        <p class="mb-25">`+data.country+`</p>
        <p class="mb-0">Tel: `+data.contact+`</p>
        <p class="mb-0">`+data.email+`</p>`
   )
   }
})

});

$('.add_payment').click(function(){
            var balance = $(this).data('balance');
            $('#balance').val('Invoice Balance: '+balance);
        })

</script>
@endpush
