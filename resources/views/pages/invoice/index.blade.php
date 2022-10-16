@section('title','Invoices')

@extends('layouts.app')

@section('content')

<!-- BEGIN: Content-->
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
            <section class="invoice-list-wrapper">
                <div class="card">
                    <div class="card-datatable table-responsive">
                        <table class="invoice-list-table table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><i data-feather="trending-up"></i></th>
                                    <th>Client</th>
                                    <th>Total</th>
                                    <th class="text-truncate">Issued Date</th>
                                    <th>Balance</th>
                                    <th>Invoice Status</th>
                                    <th class="cell-fit">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($invoices as $key => $invoice)
                                @php
                                $discount = $invoice->invoice_payments->sum('discount') ?? 0;
                                $tax1 = $invoice->invoice_payments->sum('tax1') ?? 0;
                                $tax2 = $invoice->invoice_payments->sum('tax2') ?? 0;
                                @endphp
                                <tr>
                                    <td>{{$invoice->invoice_no}}</td>
                                    <td></td>
                                    <td>{{$invoice->customer->name ?? ''}}</td>
                                    <td>{{$invoice->invoice_payments->sum('price') - ($discount+$tax1+$tax2) ?? ''}}</td>
                                    <td>{{$invoice->date}}</td>
                                    <td>{{max(($invoice->invoice_payments->sum('price') - ($discount+$tax1+$tax2)) - $invoice->payment_amount,0) ?? '0'}}</td>
                                    <td>{{$invoice->payment_amount == null ? 'Unpaid' : 'Paid'}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                <i class="ficon" data-feather="more-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{route('invoice.preview',$invoice->id)}}">
                                                    <i class="ficon" data-feather="eye"></i>
                                                    <span>Preview</span>
                                                </a>

                                                <a class="dropdown-item" href="{{route('invoice.edit',$invoice->id)}}">
                                                    <i class="ficon" data-feather="edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="dropdown-item" href="{{route('invoice.delete',$invoice->id)}}">
                                                    <i class="ficon" data-feather="trash-2"></i>
                                                    <span>Delete</span>
                                                </a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
