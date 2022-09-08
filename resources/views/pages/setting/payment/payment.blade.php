<x-base-layout>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div  data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Add Page</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Setting</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Payment</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        {{-- <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Add Category</li> --}}
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter</a>
                        <!--end::Menu toggle-->
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220f00b9e387">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220f00b9e387" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <div class="d-flex">
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form id="kt_ecommerce_add_category_form" method="post" enctype="multipart/form-data" action="{{route('setting.Postpayment')}}"  class="form d-flex flex-column flex-lg-row">
                    @csrf
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Payment Option</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select name="paymentOption" class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                                    <option></option>
                                    <option @if(isset($payment->paymentOption) && $payment->paymentOption == 'Enable') selected @endif value="Enable" selected="selected">Enable</option>
                                    <option @if(isset($payment->paymentOption) && $payment->paymentOption == 'Disable') selected @endif value="Disable">Disable</option>
                                </select>
                            </div>
                        </div>
                    {{-- </div> --}}

                    {{-- <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10"> --}}
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Deposit Option</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select name="depositOption" class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                                    <option></option>
                                    <option @if(isset($payment->depositOption) && $payment->depositOption == 'Enable') selected @endif value="Enable" selected="selected">Enable</option>
                                    <option @if(isset($payment->depositOption) && $payment->depositOption == 'Disable') selected @endif value="Disable">Disable</option>
                                </select>
                            </div>
                        </div>
                    {{-- </div> --}}

                    {{-- <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10"> --}}
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Guest Booking</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select name="guestBooking" class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                                    <option></option>
                                    <option @if(isset($payment->guestBooking) && $payment->guestBooking == 'Enable') selected @endif  value="Enable" selected="selected">Enable</option>
                                    <option @if(isset($payment->guestBooking) && $payment->guestBooking == 'Disable') selected @endif  value="Disable">Disable</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Stripe Option</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Secret Key</label>
                                    <input type="text" value="@isset($payment->stripe_secret_key){{$payment->stripe_secret_key}}@endisset" name="secret_key" class="form-control mb-2" placeholder="Page name" value="" />
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Public Key</label>
                                    <input type="text" name="public_key" value="@isset($payment->stripe_public_key){{$payment->stripe_public_key}}@endisset" class="form-control mb-2" placeholder="Page name" value="" />
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <div class="card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Paypal Standard</h2>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="mb-10 fv-row">
                                        <label class="required form-label">Paypal Success Url</label>
                                        <input type="text" name="success_url" value="@isset($payment->paypal_success_url){{$payment->paypal_success_url}}@endisset" class="form-control mb-2" placeholder="Page name" value="" />
                                    </div>
                                </div>
    
                                <div class="card-body pt-0">
                                    <div class="mb-10 fv-row">
                                        <label class="required form-label">Paypal Cancel Url</label>
                                        <input type="text" name="cancel_url" class="form-control mb-2" placeholder="Page name" value="@isset($payment->paypal_cancel_url){{$payment->paypal_cancel_url}}@endisset" />
                                    </div>
                                </div>
                                
                                <div class="card-body pt-0">
                                    <div class="mb-10 fv-row">
                                        <label class="required form-label">Paypal IPN File Url</label>
                                        <input type="text" name="ipn_file_url" class="form-control mb-2" placeholder="Page name" value="@isset($payment->paypal_ipn_file_url){{$payment->paypal_ipn_file_url}}@endisset" />
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div class="mb-10 fv-row">
                                        <label class="required form-label">Paypal Mode</label>
                                        <select name="paypal_mode" class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                                            <option></option>
                                            <option @if(isset($payment->paypal_mode) && $payment->paypal_mode == 'Test') selected @endif value="Test" selected="selected">Test</option>
                                            <option @if(isset($payment->paypal_mode) && $payment->paypal_mode == 'Live') selected @endif value="Live">Live</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <div class="card card-flush py-4">
                            <div class="card-header">
                                {{-- <div class="card-title">
                                    <h2>Meta Options</h2>
                                </div> --}}
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10">
                                    <label class="form-label">Currency</label>
                                    <input type="text" value="@isset($payment->currency){{$payment->currency}}@endisset" class="form-control mb-2" name="currency" placeholder="Currency" />
                                </div>
                                <div class="mb-10">
                                    <label class="form-label">Symbol</label>
                                    <input type="text" value="@isset($payment->symbol){{$payment->symbol}}@endisset" class="form-control mb-2" name="symbol" placeholder="Symbol" />
                                </div>
                                <div class="mb-10">
                                    <label class="form-label">Exchange Rate</label>
                                    <input type="text" value="@isset($payment->exchange_rate){{$payment->exchange_rate}}@endisset" class="form-control mb-2" name="exchange_rate" placeholder="Exchange Rate" />
                                </div>
                                <div class="mb-10">
                                    <label class="form-label">Decimal Points</label>
                                    <input type="text" value="@isset($payment->decimal_points){{$payment->decimal_points}}@endisset" class="form-control mb-2" name="decimal_points" placeholder="Decimal Points" />
                                </div>
                                <div class="mb-10">
                                    <label class="form-label">Seperator Option</label>
                                    <input type="text" value="@isset($payment->seperator_option){{$payment->seperator_option}}@endisset" class="form-control mb-2" name="seperator_option" placeholder="Seperator Option" />
                                </div>
                            
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            jQuery(document).ready(function($){
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 200
                });
            });
        });
    
    </script>
    </x-base-layout>