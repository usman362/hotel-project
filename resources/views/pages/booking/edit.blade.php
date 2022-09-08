<x-base-layout>


    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div  data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit a Booking</h1>
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
                        <li class="breadcrumb-item text-muted">Booking</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Edit a Booking</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                       {{--  <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Add Order</li> --}}
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
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6220f011cbadd">
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
                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6220f011cbadd" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                    </div>
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form method="POST" action="{{route('bookings.update', $booking->id)}}" class="form d-flex flex-column flex-lg-row">
                    @csrf
                    <div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Booking Details</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex flex-column gap-10">
                                    <div class="fv-row justify-content-between align-items-baseline d-flex">
                                        <label class="form-label">Reference ID</label>
                                        <div class="fw-bolder fs-3">{{$booking->booking_ref}}</div>
                                    </div>
                                    <div class="fv-row">
                                        <label class="required form-label">Payment Method</label>
                                        <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="payment_method" id="kt_ecommerce_edit_order_payment">
                                            <option></option>
                                            <option value="cod" @if($booking->payment_method == 'cod') selected @endif>Cash on Delivery</option>
                                            <option value="visa" @if($booking->payment_method == 'visa') selected @endif>Credit Card (Visa)</option>
                                            <option value="mastercard" @if($booking->payment_method == 'mastercard') selected @endif>Credit Card (Mastercard)</option>
                                            <option value="paypal" @if($booking->payment_method == 'paypal') selected @endif>Paypal</option>
                                        </select>
                                    </div>
                                    <div class="fv-row">
                                        <label class="required form-label">Price Per Person</label>
                                        <input type="number" class="form-control mb-2" value="{{$booking->price_per_person}}" id="price_per_person" name="price_per_person">
                                    </div>
                                    <div class="fv-row">
                                        <label class="required form-label">Deposit Per Person</label>
                                        <input type="number" value="{{$booking->deposited_price}}" class="form-control mb-2" name="deposit_per_person">
                                    </div>
                                    <div class="fv-row">
                                        <label class="required form-label">Balance Per Person</label>
                                        <input type="number" disabled value="{{$booking->balance_price}}" class="form-control mb-2" id="balance_per_person" name="balance_per_person">
                                    </div>
                                    <div class="fv-row">
                                        <label class="required form-label">Booking Date</label>
                                        <input type="date" id="kt_ecommerce_edit_order_date" value="{{$booking->booking_date}}" name="booking_date" placeholder="Select a date" class="form-control mb-2" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex flex-column gap-10">
                                    <div class="fv-row">
                                        <label class="required form-label">Booking Status</label>
                                        <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="status" id="kt_ecommerce_edit_order_status">
                                            <option></option>
                                            <option value="Pending" @if($booking->status == 'Pending') selected @endif>Pending</option>
                                            <option value="Completed" @if($booking->status == 'Completed') selected @endif>Completed</option>
                                            <option value="Cancelled" @if($booking->status == 'Cancelled') selected @endif>Cancelled</option>
                                            <option value="Confirmed" @if($booking->status == 'Confirmed') selected @endif>Confirmed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Aside column-->
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
                        <!--begin::Order details-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Traveler Details</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex flex-column gap-5 gap-md-7">
                                    <div class="d-flex flex-column align-items-baseline flex-md-row gap-5">
                                        <div class="flex-row-fluid w-25">
                                            <label class="required form-label">Lead Traveler</label>
                                            <div class="d-flex justify-content-between gap-5">
                                                <div class="w-50">
                                                    <select required class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="l_t_name1" id="kt_ecommerce_edit_order_shipping">
                                                        <option></option>
                                                        <option value="Mr." @if (explode(',', $booking->lead_traveler)[0] == 'Mr.') selected @endif>Mr.</option>
                                                        <option value="MS." @if (explode(',', $booking->lead_traveler)[0] == 'MS.') selected @endif>MS.</option>
                                                        <option value="MRS" @if (explode(',', $booking->lead_traveler)[0] == 'MRS') selected @endif>MRS</option>
                                                    </select>
                                                </div>
                                                <div class="w-50">
                                                    <input type="text" required class="form-control" name="l_t_name2" value="{{explode(',', $booking->lead_traveler)[1]}}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-baseline flex-md-row gap-5">
                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="form-label required">Email</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" class="form-control" name="l_t_email" value="{{$booking->email}}" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="required form-label">Phone Number</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" class="form-control" name="l_t_phone" value="{{$booking->phone}}" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row flex-row-fluid w-50">
                                            <!--begin::Label-->
                                            <label class="required form-label">Country</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            {{-- <div class="form-floating border rounded"> --}}
                                                <select class="form-select" data-control="select2" data-hide-search="false" data-placeholder="Select an country" id="kt_ecommerce_edit_order_billing_country" name="country">
                                                    <option></option>
                                                    <option value="AF" data-kt-select2-country="assets/media/flags/afghanistan.svg">Afghanistan</option>
                                                    <option value="AX" data-kt-select2-country="assets/media/flags/aland-islands.svg">Aland Islands</option>
                                                    <option value="AL" selected data-kt-select2-country="assets/media/flags/albania.svg">Albania</option>
                                                    <option value="DZ" data-kt-select2-country="assets/media/flags/algeria.svg">Algeria</option>
                                                    <option value="AS" data-kt-select2-country="assets/media/flags/american-samoa.svg">American Samoa</option>
                                                    <option value="AD" data-kt-select2-country="assets/media/flags/andorra.svg">Andorra</option>
                                                    <option value="AO" data-kt-select2-country="assets/media/flags/angola.svg">Angola</option>
                                                    <option value="AI" data-kt-select2-country="assets/media/flags/anguilla.svg">Anguilla</option>
                                                    <option value="AG" data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg">Antigua and Barbuda</option>
                                                    <option value="AR" data-kt-select2-country="assets/media/flags/argentina.svg">Argentina</option>
                                                    <option value="AM" data-kt-select2-country="assets/media/flags/armenia.svg">Armenia</option>
                                                    <option value="AW" data-kt-select2-country="assets/media/flags/aruba.svg">Aruba</option>
                                                    <option value="AU" data-kt-select2-country="assets/media/flags/australia.svg">Australia</option>
                                                    <option value="AT" data-kt-select2-country="assets/media/flags/austria.svg">Austria</option>
                                                    <option value="AZ" data-kt-select2-country="assets/media/flags/azerbaijan.svg">Azerbaijan</option>
                                                    <option value="BS" data-kt-select2-country="assets/media/flags/bahamas.svg">Bahamas</option>
                                                    <option value="BH" data-kt-select2-country="assets/media/flags/bahrain.svg">Bahrain</option>
                                                    <option value="BD" data-kt-select2-country="assets/media/flags/bangladesh.svg">Bangladesh</option>
                                                    <option value="BB" data-kt-select2-country="assets/media/flags/barbados.svg">Barbados</option>
                                                    <option value="BY" data-kt-select2-country="assets/media/flags/belarus.svg">Belarus</option>
                                                    <option value="BE" data-kt-select2-country="assets/media/flags/belgium.svg">Belgium</option>
                                                    <option value="BZ" data-kt-select2-country="assets/media/flags/belize.svg">Belize</option>
                                                    <option value="BJ" data-kt-select2-country="assets/media/flags/benin.svg">Benin</option>
                                                    <option value="BM" data-kt-select2-country="assets/media/flags/bermuda.svg">Bermuda</option>
                                                    <option value="BT" data-kt-select2-country="assets/media/flags/bhutan.svg">Bhutan</option>
                                                    <option value="BO" data-kt-select2-country="assets/media/flags/bolivia.svg">Bolivia, Plurinational State of</option>
                                                    <option value="BQ" data-kt-select2-country="assets/media/flags/bonaire.svg">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA" data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.svg">Bosnia and Herzegovina</option>
                                                    <option value="BW" data-kt-select2-country="assets/media/flags/botswana.svg">Botswana</option>
                                                    <option value="BR" data-kt-select2-country="assets/media/flags/brazil.svg">Brazil</option>
                                                    <option value="IO" data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.svg">British Indian Ocean Territory</option>
                                                    <option value="BN" data-kt-select2-country="assets/media/flags/brunei.svg">Brunei Darussalam</option>
                                                    <option value="BG" data-kt-select2-country="assets/media/flags/bulgaria.svg">Bulgaria</option>
                                                    <option value="BF" data-kt-select2-country="assets/media/flags/burkina-faso.svg">Burkina Faso</option>
                                                    <option value="BI" data-kt-select2-country="assets/media/flags/burundi.svg">Burundi</option>
                                                    <option value="KH" data-kt-select2-country="assets/media/flags/cambodia.svg">Cambodia</option>
                                                    <option value="CM" data-kt-select2-country="assets/media/flags/cameroon.svg">Cameroon</option>
                                                    <option value="CA" data-kt-select2-country="assets/media/flags/canada.svg">Canada</option>
                                                    <option value="CV" data-kt-select2-country="assets/media/flags/cape-verde.svg">Cape Verde</option>
                                                    <option value="KY" data-kt-select2-country="assets/media/flags/cayman-islands.svg">Cayman Islands</option>
                                                    <option value="CF" data-kt-select2-country="assets/media/flags/central-african-republic.svg">Central African Republic</option>
                                                    <option value="TD" data-kt-select2-country="assets/media/flags/chad.svg">Chad</option>
                                                    <option value="CL" data-kt-select2-country="assets/media/flags/chile.svg">Chile</option>
                                                    <option value="CN" data-kt-select2-country="assets/media/flags/china.svg">China</option>
                                                    <option value="CX" data-kt-select2-country="assets/media/flags/christmas-island.svg">Christmas Island</option>
                                                    <option value="CC" data-kt-select2-country="assets/media/flags/cocos-island.svg">Cocos (Keeling) Islands</option>
                                                    <option value="CO" data-kt-select2-country="assets/media/flags/colombia.svg">Colombia</option>
                                                    <option value="KM" data-kt-select2-country="assets/media/flags/comoros.svg">Comoros</option>
                                                    <option value="CK" data-kt-select2-country="assets/media/flags/cook-islands.svg">Cook Islands</option>
                                                    <option value="CR" data-kt-select2-country="assets/media/flags/costa-rica.svg">Costa Rica</option>
                                                    <option value="CI" data-kt-select2-country="assets/media/flags/ivory-coast.svg">Côte d'Ivoire</option>
                                                    <option value="HR" data-kt-select2-country="assets/media/flags/croatia.svg">Croatia</option>
                                                    <option value="CU" data-kt-select2-country="assets/media/flags/cuba.svg">Cuba</option>
                                                    <option value="CW" data-kt-select2-country="assets/media/flags/curacao.svg">Curaçao</option>
                                                    <option value="CZ" data-kt-select2-country="assets/media/flags/czech-republic.svg">Czech Republic</option>
                                                    <option value="DK" data-kt-select2-country="assets/media/flags/denmark.svg">Denmark</option>
                                                    <option value="DJ" data-kt-select2-country="assets/media/flags/djibouti.svg">Djibouti</option>
                                                    <option value="DM" data-kt-select2-country="assets/media/flags/dominica.svg">Dominica</option>
                                                    <option value="DO" data-kt-select2-country="assets/media/flags/dominican-republic.svg">Dominican Republic</option>
                                                    <option value="EC" data-kt-select2-country="assets/media/flags/ecuador.svg">Ecuador</option>
                                                    <option value="EG" data-kt-select2-country="assets/media/flags/egypt.svg">Egypt</option>
                                                    <option value="SV" data-kt-select2-country="assets/media/flags/el-salvador.svg">El Salvador</option>
                                                    <option value="GQ" data-kt-select2-country="assets/media/flags/equatorial-guinea.svg">Equatorial Guinea</option>
                                                    <option value="ER" data-kt-select2-country="assets/media/flags/eritrea.svg">Eritrea</option>
                                                    <option value="EE" data-kt-select2-country="assets/media/flags/estonia.svg">Estonia</option>
                                                    <option value="ET" data-kt-select2-country="assets/media/flags/ethiopia.svg">Ethiopia</option>
                                                    <option value="FK" data-kt-select2-country="assets/media/flags/falkland-islands.svg">Falkland Islands (Malvinas)</option>
                                                    <option value="FJ" data-kt-select2-country="assets/media/flags/fiji.svg">Fiji</option>
                                                    <option value="FI" data-kt-select2-country="assets/media/flags/finland.svg">Finland</option>
                                                    <option value="FR" data-kt-select2-country="assets/media/flags/france.svg">France</option>
                                                    <option value="PF" data-kt-select2-country="assets/media/flags/french-polynesia.svg">French Polynesia</option>
                                                    <option value="GA" data-kt-select2-country="assets/media/flags/gabon.svg">Gabon</option>
                                                    <option value="GM" data-kt-select2-country="assets/media/flags/gambia.svg">Gambia</option>
                                                    <option value="GE" data-kt-select2-country="assets/media/flags/georgia.svg">Georgia</option>
                                                    <option value="DE" data-kt-select2-country="assets/media/flags/germany.svg">Germany</option>
                                                    <option value="GH" data-kt-select2-country="assets/media/flags/ghana.svg">Ghana</option>
                                                    <option value="GI" data-kt-select2-country="assets/media/flags/gibraltar.svg">Gibraltar</option>
                                                    <option value="GR" data-kt-select2-country="assets/media/flags/greece.svg">Greece</option>
                                                    <option value="GL" data-kt-select2-country="assets/media/flags/greenland.svg">Greenland</option>
                                                    <option value="GD" data-kt-select2-country="assets/media/flags/grenada.svg">Grenada</option>
                                                    <option value="GU" data-kt-select2-country="assets/media/flags/guam.svg">Guam</option>
                                                    <option value="GT" data-kt-select2-country="assets/media/flags/guatemala.svg">Guatemala</option>
                                                    <option value="GG" data-kt-select2-country="assets/media/flags/guernsey.svg">Guernsey</option>
                                                    <option value="GN" data-kt-select2-country="assets/media/flags/guinea.svg">Guinea</option>
                                                    <option value="GW" data-kt-select2-country="assets/media/flags/guinea-bissau.svg">Guinea-Bissau</option>
                                                    <option value="HT" data-kt-select2-country="assets/media/flags/haiti.svg">Haiti</option>
                                                    <option value="VA" data-kt-select2-country="assets/media/flags/vatican-city.svg">Holy See (Vatican City State)</option>
                                                    <option value="HN" data-kt-select2-country="assets/media/flags/honduras.svg">Honduras</option>
                                                    <option value="HK" data-kt-select2-country="assets/media/flags/hong-kong.svg">Hong Kong</option>
                                                    <option value="HU" data-kt-select2-country="assets/media/flags/hungary.svg">Hungary</option>
                                                    <option value="IS" data-kt-select2-country="assets/media/flags/iceland.svg">Iceland</option>
                                                    <option value="IN" data-kt-select2-country="assets/media/flags/india.svg">India</option>
                                                    <option value="ID" data-kt-select2-country="assets/media/flags/indonesia.svg">Indonesia</option>
                                                    <option value="IR" data-kt-select2-country="assets/media/flags/iran.svg">Iran, Islamic Republic of</option>
                                                    <option value="IQ" data-kt-select2-country="assets/media/flags/iraq.svg">Iraq</option>
                                                    <option value="IE" data-kt-select2-country="assets/media/flags/ireland.svg">Ireland</option>
                                                    <option value="IM" data-kt-select2-country="assets/media/flags/isle-of-man.svg">Isle of Man</option>
                                                    <option value="IL" data-kt-select2-country="assets/media/flags/israel.svg">Israel</option>
                                                    <option value="IT" data-kt-select2-country="assets/media/flags/italy.svg">Italy</option>
                                                    <option value="JM" data-kt-select2-country="assets/media/flags/jamaica.svg">Jamaica</option>
                                                    <option value="JP" data-kt-select2-country="assets/media/flags/japan.svg">Japan</option>
                                                    <option value="JE" data-kt-select2-country="assets/media/flags/jersey.svg">Jersey</option>
                                                    <option value="JO" data-kt-select2-country="assets/media/flags/jordan.svg">Jordan</option>
                                                    <option value="KZ" data-kt-select2-country="assets/media/flags/kazakhstan.svg">Kazakhstan</option>
                                                    <option value="KE" data-kt-select2-country="assets/media/flags/kenya.svg">Kenya</option>
                                                    <option value="KI" data-kt-select2-country="assets/media/flags/kiribati.svg">Kiribati</option>
                                                    <option value="KP" data-kt-select2-country="assets/media/flags/north-korea.svg">Korea, Democratic People's Republic of</option>
                                                    <option value="KW" data-kt-select2-country="assets/media/flags/kuwait.svg">Kuwait</option>
                                                    <option value="KG" data-kt-select2-country="assets/media/flags/kyrgyzstan.svg">Kyrgyzstan</option>
                                                    <option value="LA" data-kt-select2-country="assets/media/flags/laos.svg">Lao People's Democratic Republic</option>
                                                    <option value="LV" data-kt-select2-country="assets/media/flags/latvia.svg">Latvia</option>
                                                    <option value="LB" data-kt-select2-country="assets/media/flags/lebanon.svg">Lebanon</option>
                                                    <option value="LS" data-kt-select2-country="assets/media/flags/lesotho.svg">Lesotho</option>
                                                    <option value="LR" data-kt-select2-country="assets/media/flags/liberia.svg">Liberia</option>
                                                    <option value="LY" data-kt-select2-country="assets/media/flags/libya.svg">Libya</option>
                                                    <option value="LI" data-kt-select2-country="assets/media/flags/liechtenstein.svg">Liechtenstein</option>
                                                    <option value="LT" data-kt-select2-country="assets/media/flags/lithuania.svg">Lithuania</option>
                                                    <option value="LU" data-kt-select2-country="assets/media/flags/luxembourg.svg">Luxembourg</option>
                                                    <option value="MO" data-kt-select2-country="assets/media/flags/macao.svg">Macao</option>
                                                    <option value="MG" data-kt-select2-country="assets/media/flags/madagascar.svg">Madagascar</option>
                                                    <option value="MW" data-kt-select2-country="assets/media/flags/malawi.svg">Malawi</option>
                                                    <option value="MY" data-kt-select2-country="assets/media/flags/malaysia.svg">Malaysia</option>
                                                    <option value="MV" data-kt-select2-country="assets/media/flags/maldives.svg">Maldives</option>
                                                    <option value="ML" data-kt-select2-country="assets/media/flags/mali.svg">Mali</option>
                                                    <option value="MT" data-kt-select2-country="assets/media/flags/malta.svg">Malta</option>
                                                    <option value="MH" data-kt-select2-country="assets/media/flags/marshall-island.svg">Marshall Islands</option>
                                                    <option value="MQ" data-kt-select2-country="assets/media/flags/martinique.svg">Martinique</option>
                                                    <option value="MR" data-kt-select2-country="assets/media/flags/mauritania.svg">Mauritania</option>
                                                    <option value="MU" data-kt-select2-country="assets/media/flags/mauritius.svg">Mauritius</option>
                                                    <option value="MX" data-kt-select2-country="assets/media/flags/mexico.svg">Mexico</option>
                                                    <option value="FM" data-kt-select2-country="assets/media/flags/micronesia.svg">Micronesia, Federated States of</option>
                                                    <option value="MD" data-kt-select2-country="assets/media/flags/moldova.svg">Moldova, Republic of</option>
                                                    <option value="MC" data-kt-select2-country="assets/media/flags/monaco.svg">Monaco</option>
                                                    <option value="MN" data-kt-select2-country="assets/media/flags/mongolia.svg">Mongolia</option>
                                                    <option value="ME" data-kt-select2-country="assets/media/flags/montenegro.svg">Montenegro</option>
                                                    <option value="MS" data-kt-select2-country="assets/media/flags/montserrat.svg">Montserrat</option>
                                                    <option value="MA" data-kt-select2-country="assets/media/flags/morocco.svg">Morocco</option>
                                                    <option value="MZ" data-kt-select2-country="assets/media/flags/mozambique.svg">Mozambique</option>
                                                    <option value="MM" data-kt-select2-country="assets/media/flags/myanmar.svg">Myanmar</option>
                                                    <option value="NA" data-kt-select2-country="assets/media/flags/namibia.svg">Namibia</option>
                                                    <option value="NR" data-kt-select2-country="assets/media/flags/nauru.svg">Nauru</option>
                                                    <option value="NP" data-kt-select2-country="assets/media/flags/nepal.svg">Nepal</option>
                                                    <option value="NL" data-kt-select2-country="assets/media/flags/netherlands.svg">Netherlands</option>
                                                    <option value="NZ" data-kt-select2-country="assets/media/flags/new-zealand.svg">New Zealand</option>
                                                    <option value="NI" data-kt-select2-country="assets/media/flags/nicaragua.svg">Nicaragua</option>
                                                    <option value="NE" data-kt-select2-country="assets/media/flags/niger.svg">Niger</option>
                                                    <option value="NG" data-kt-select2-country="assets/media/flags/nigeria.svg">Nigeria</option>
                                                    <option value="NU" data-kt-select2-country="assets/media/flags/niue.svg">Niue</option>
                                                    <option value="NF" data-kt-select2-country="assets/media/flags/norfolk-island.svg">Norfolk Island</option>
                                                    <option value="MP" data-kt-select2-country="assets/media/flags/northern-mariana-islands.svg">Northern Mariana Islands</option>
                                                    <option value="NO" data-kt-select2-country="assets/media/flags/norway.svg">Norway</option>
                                                    <option value="OM" data-kt-select2-country="assets/media/flags/oman.svg">Oman</option>
                                                    <option value="PK" data-kt-select2-country="assets/media/flags/pakistan.svg">Pakistan</option>
                                                    <option value="PW" data-kt-select2-country="assets/media/flags/palau.svg">Palau</option>
                                                    <option value="PS" data-kt-select2-country="assets/media/flags/palestine.svg">Palestinian Territory, Occupied</option>
                                                    <option value="PA" data-kt-select2-country="assets/media/flags/panama.svg">Panama</option>
                                                    <option value="PG" data-kt-select2-country="assets/media/flags/papua-new-guinea.svg">Papua New Guinea</option>
                                                    <option value="PY" data-kt-select2-country="assets/media/flags/paraguay.svg">Paraguay</option>
                                                    <option value="PE" data-kt-select2-country="assets/media/flags/peru.svg">Peru</option>
                                                    <option value="PH" data-kt-select2-country="assets/media/flags/philippines.svg">Philippines</option>
                                                    <option value="PL" data-kt-select2-country="assets/media/flags/poland.svg">Poland</option>
                                                    <option value="PT" data-kt-select2-country="assets/media/flags/portugal.svg">Portugal</option>
                                                    <option value="PR" data-kt-select2-country="assets/media/flags/puerto-rico.svg">Puerto Rico</option>
                                                    <option value="QA" data-kt-select2-country="assets/media/flags/qatar.svg">Qatar</option>
                                                    <option value="RO" data-kt-select2-country="assets/media/flags/romania.svg">Romania</option>
                                                    <option value="RU" data-kt-select2-country="assets/media/flags/russia.svg">Russian Federation</option>
                                                    <option value="RW" data-kt-select2-country="assets/media/flags/rwanda.svg">Rwanda</option>
                                                    <option value="BL" data-kt-select2-country="assets/media/flags/st-barts.svg">Saint Barthélemy</option>
                                                    <option value="KN" data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.svg">Saint Kitts and Nevis</option>
                                                    <option value="LC" data-kt-select2-country="assets/media/flags/st-lucia.svg">Saint Lucia</option>
                                                    <option value="MF" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Saint Martin (French part)</option>
                                                    <option value="VC" data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.svg">Saint Vincent and the Grenadines</option>
                                                    <option value="WS" data-kt-select2-country="assets/media/flags/samoa.svg">Samoa</option>
                                                    <option value="SM" data-kt-select2-country="assets/media/flags/san-marino.svg">San Marino</option>
                                                    <option value="ST" data-kt-select2-country="assets/media/flags/sao-tome-and-prince.svg">Sao Tome and Principe</option>
                                                    <option value="SA" data-kt-select2-country="assets/media/flags/saudi-arabia.svg">Saudi Arabia</option>
                                                    <option value="SN" data-kt-select2-country="assets/media/flags/senegal.svg">Senegal</option>
                                                    <option value="RS" data-kt-select2-country="assets/media/flags/serbia.svg">Serbia</option>
                                                    <option value="SC" data-kt-select2-country="assets/media/flags/seychelles.svg">Seychelles</option>
                                                    <option value="SL" data-kt-select2-country="assets/media/flags/sierra-leone.svg">Sierra Leone</option>
                                                    <option value="SG" data-kt-select2-country="assets/media/flags/singapore.svg">Singapore</option>
                                                    <option value="SX" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Sint Maarten (Dutch part)</option>
                                                    <option value="SK" data-kt-select2-country="assets/media/flags/slovakia.svg">Slovakia</option>
                                                    <option value="SI" data-kt-select2-country="assets/media/flags/slovenia.svg">Slovenia</option>
                                                    <option value="SB" data-kt-select2-country="assets/media/flags/solomon-islands.svg">Solomon Islands</option>
                                                    <option value="SO" data-kt-select2-country="assets/media/flags/somalia.svg">Somalia</option>
                                                    <option value="ZA" data-kt-select2-country="assets/media/flags/south-africa.svg">South Africa</option>
                                                    <option value="KR" data-kt-select2-country="assets/media/flags/south-korea.svg">South Korea</option>
                                                    <option value="SS" data-kt-select2-country="assets/media/flags/south-sudan.svg">South Sudan</option>
                                                    <option value="ES" data-kt-select2-country="assets/media/flags/spain.svg">Spain</option>
                                                    <option value="LK" data-kt-select2-country="assets/media/flags/sri-lanka.svg">Sri Lanka</option>
                                                    <option value="SD" data-kt-select2-country="assets/media/flags/sudan.svg">Sudan</option>
                                                    <option value="SR" data-kt-select2-country="assets/media/flags/suriname.svg">Suriname</option>
                                                    <option value="SZ" data-kt-select2-country="assets/media/flags/swaziland.svg">Swaziland</option>
                                                    <option value="SE" data-kt-select2-country="assets/media/flags/sweden.svg">Sweden</option>
                                                    <option value="CH" data-kt-select2-country="assets/media/flags/switzerland.svg">Switzerland</option>
                                                    <option value="SY" data-kt-select2-country="assets/media/flags/syria.svg">Syrian Arab Republic</option>
                                                    <option value="TW" data-kt-select2-country="assets/media/flags/taiwan.svg">Taiwan, Province of China</option>
                                                    <option value="TJ" data-kt-select2-country="assets/media/flags/tajikistan.svg">Tajikistan</option>
                                                    <option value="TZ" data-kt-select2-country="assets/media/flags/tanzania.svg">Tanzania, United Republic of</option>
                                                    <option value="TH" data-kt-select2-country="assets/media/flags/thailand.svg">Thailand</option>
                                                    <option value="TG" data-kt-select2-country="assets/media/flags/togo.svg">Togo</option>
                                                    <option value="TK" data-kt-select2-country="assets/media/flags/tokelau.svg">Tokelau</option>
                                                    <option value="TO" data-kt-select2-country="assets/media/flags/tonga.svg">Tonga</option>
                                                    <option value="TT" data-kt-select2-country="assets/media/flags/trinidad-and-tobago.svg">Trinidad and Tobago</option>
                                                    <option value="TN" data-kt-select2-country="assets/media/flags/tunisia.svg">Tunisia</option>
                                                    <option value="TR" data-kt-select2-country="assets/media/flags/turkey.svg">Turkey</option>
                                                    <option value="TM" data-kt-select2-country="assets/media/flags/turkmenistan.svg">Turkmenistan</option>
                                                    <option value="TC" data-kt-select2-country="assets/media/flags/turks-and-caicos.svg">Turks and Caicos Islands</option>
                                                    <option value="TV" data-kt-select2-country="assets/media/flags/tuvalu.svg">Tuvalu</option>
                                                    <option value="UG" data-kt-select2-country="assets/media/flags/uganda.svg">Uganda</option>
                                                    <option value="UA" data-kt-select2-country="assets/media/flags/ukraine.svg">Ukraine</option>
                                                    <option value="AE" data-kt-select2-country="assets/media/flags/united-arab-emirates.svg">United Arab Emirates</option>
                                                    <option value="GB" data-kt-select2-country="assets/media/flags/united-kingdom.svg">United Kingdom</option>
                                                    <option value="US" data-kt-select2-country="assets/media/flags/united-states.svg">United States</option>
                                                    <option value="UY" data-kt-select2-country="assets/media/flags/uruguay.svg">Uruguay</option>
                                                    <option value="UZ" data-kt-select2-country="assets/media/flags/uzbekistan.svg">Uzbekistan</option>
                                                    <option value="VU" data-kt-select2-country="assets/media/flags/vanuatu.svg">Vanuatu</option>
                                                    <option value="VE" data-kt-select2-country="assets/media/flags/venezuela.svg">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN" data-kt-select2-country="assets/media/flags/vietnam.svg">Vietnam</option>
                                                    <option value="VI" data-kt-select2-country="assets/media/flags/virgin-islands.svg">Virgin Islands</option>
                                                    <option value="YE" data-kt-select2-country="assets/media/flags/yemen.svg">Yemen</option>
                                                    <option value="ZM" data-kt-select2-country="assets/media/flags/zambia.svg">Zambia</option>
                                                    <option value="ZW" data-kt-select2-country="assets/media/flags/zimbabwe.svg">Zimbabwe</option>
                                                </select>
                                                {{-- <label for="kt_ecommerce_edit_order_billing_country">Select a country</label> --}}
                                            {{-- </div> --}}
                                            <!--end::Select2-->
                                        </div>
                                        <div class="fv-row flex-row-fluid w-50">
                                            <!--begin::Label-->
                                            <label class="required form-label">Date of Birth</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="date" class="form-control" value="{{$booking->date_of_birth}}" name="l_t_date_birth" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="flex-row-fluid w-50">
                                            <!--begin::Label-->
                                            <label class="required form-label">Trip Name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" value="{{$booking->trip_name}}" name="t_name" placeholder="" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row flex-row-fluid w-50">
                                            <!--begin::Label-->
                                            <label class="required form-label">Trip Type</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="t_tour_type" data-control="select2" data-hide-search="true" data-placeholder="Select an Type" class="form-select" id="t_tour_type">
                                                <option value="">select</option>
                                                <option value="private" @if($booking->tour_type == 'private') selected @endif> Private </option>
                                                <option value="group" @if($booking->tour_type == 'group') selected @endif> Group </option>
                                            </select>
                                            {{-- <input type="email" class="form-control" name="l_t_email" placeholder="" value="" /> --}}
                                            <!--end::Input-->
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="flex-row-fluid w-50">
                                            <!--begin::Label-->
                                            <label class="required form-label">Trip Duration</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" value="{{$booking->trip_duration}}" name="t_duration" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row flex-row-fluid w-50">
                                            <!--begin::Label-->
                                            <label class="required form-label">Trip Date</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="date" class="form-control" value="{{$booking->trip_date}}" name="t_date" />
                                            {{-- <input type="email" class="form-control" name="l_t_email" placeholder="" value="" /> --}}
                                            <!--end::Input-->
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        
                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="required form-label">No of Travelers</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="no_of_travelers" data-control="select2" data-hide-search="true" data-placeholder="Select an option" class="form-select" id="t_traveler_no">
                                                    <option value="">select</option>
                                                    @for ($i=0; $i<100; $i++)
                                                    <option @if($booking->no_of_travelers == $i) selected @endif value="{{$i+1}}"> {{$i+1}} </option>
                                                    @endfor
                                                </select>
                                            </div>
                                    </div>
                                    <div class="w-100" id="travs">
                                        @if (!empty($booking->travelers))
                                            
                                            @foreach (explode('(,,)', $booking->travelers) as $key => $item)
                                            <div class="flex-row-fluid">
                                                <label class="required form-label">Traveler {{$key+1}}</label>
                                            
                                                <div class="d-flex justify-content-between gap-5">
                                                    <div class="w-50">
                                                        <select required class="form-select mb-2" name="traveler_name1[]" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="travelers_{{$key+1}}">
                                                            <option>Select an option</option>
                                                            <option @if(explode(',', $item)[0] == 'Mr.') selected @endif value="Mr.">Mr.</option>
                                                            <option @if(explode(',', $item)[0] == 'MS.') selected @endif value="MS.">MS.</option>
                                                            <option @if(explode(',', $item)[0] == 'MRS') selected @endif value="MRS">MRS</option>
                                                        </select>
                                                    </div>
                                                    <div class="w-50">
                                                        <input required type="text" class="form-control" value="{{explode(',', $item)[1]}}" name="traveler_name2[]" />
                                                    </div>
                                                </div>
                                            </div> 
                                            @endforeach

                                        @endif


                                    </div>
                                    <div class="fs-3 fw-bolder mb-n2">Addons</div>
                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="required form-label">Addon Name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control" value="{{$booking->addon_name}}" name="addon_name" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="required form-label">No of Addon</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="no_of_addon" data-control="select2" data-hide-search="true" data-placeholder="Select an option" class="form-select" id="no_of_addon">
                                                <option value="">select</option>
                                                @for ($i=0; $i<100; $i++)
                                                <option @if($booking->no_of_addon == $i+1) selected @endif value="{{$i+1}}"> {{$i+1}} </option>
                                                @endfor
                                            </select>
                                            {{-- <input type="number" class="form-control" name="t_srvc_adn" placeholder="" value="" /> --}}
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="required form-label">Price Per Item</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" value="{{$booking->addon_price_per_person}}" class="form-control" name="addon_price_per_item" id="p_p_i" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row flex-row-fluid w-25">
                                            <!--begin::Label-->
                                            <label class="required form-label">Total Price</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" disabled class="form-control" value="{{$booking->addon_total_price}}" name="addon_total_price" id="t_p" />
                                            {{-- <input type="hidden" name="addon_total_price" value="{{$booking->addon_total_price}}"> --}}
                                            <!--end::Input-->
                                        </div>
                                   
                                    </div>
                                    <div class="w-100 gap-5" id="notes_all">
                                        @foreach (explode('(,,)', $booking->notes) as $item)
                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="form-label">Notes</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea name="notes[]" class="form-control" id="" cols="30" rows="5">{{$item}}</textarea>

                                            {{-- <input type="text" class="form-control" name="t_srvc_adn" placeholder="" value="" /> --}}
                                            <!--end::Input-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="w-100 gap-5">
                                        <div class="fv-row flex-row-fluid float-end">
                                            <button type="button" id="btnMore" class="btn btn-primary">
                                                <span class="indicator-label">More</span>
                                            </button>
                                        </div>
                                    </div>
                                    {{-- <div class="d-none d-flex flex-column gap-5 gap-md-7" id="kt_ecommerce_edit_order_shipping_form">
                                        <!--begin::Title-->
                                        <div class="fs-3 fw-bolder mb-n2">Shipping Address</div>
                                        <!--end::Title-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5">
                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">Address Line 1</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="kt_ecommerce_edit_order_address_1" placeholder="Address Line 1" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">Address Line 2</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="kt_ecommerce_edit_order_address_2" placeholder="Address Line 2" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5">
                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">City</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="kt_ecommerce_edit_order_city" placeholder="" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">Postcode</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="kt_ecommerce_edit_order_postcode" placeholder="" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">State</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="kt_ecommerce_edit_order_state" placeholder="" value="" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Country</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <div class="form-floating border rounded">
                                                <select class="form-select" data-placeholder="Select an option" id="kt_ecommerce_edit_order_shipping_country">
                                                    <option></option>
                                                    <option value="AF" data-kt-select2-country="assets/media/flags/afghanistan.svg">Afghanistan</option>
                                                    <option value="AX" data-kt-select2-country="assets/media/flags/aland-islands.svg">Aland Islands</option>
                                                    <option value="AL" data-kt-select2-country="assets/media/flags/albania.svg">Albania</option>
                                                    <option value="DZ" data-kt-select2-country="assets/media/flags/algeria.svg">Algeria</option>
                                                    <option value="AS" data-kt-select2-country="assets/media/flags/american-samoa.svg">American Samoa</option>
                                                    <option value="AD" data-kt-select2-country="assets/media/flags/andorra.svg">Andorra</option>
                                                    <option value="AO" data-kt-select2-country="assets/media/flags/angola.svg">Angola</option>
                                                    <option value="AI" data-kt-select2-country="assets/media/flags/anguilla.svg">Anguilla</option>
                                                    <option value="AG" data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg">Antigua and Barbuda</option>
                                                    <option value="AR" data-kt-select2-country="assets/media/flags/argentina.svg">Argentina</option>
                                                    <option value="AM" data-kt-select2-country="assets/media/flags/armenia.svg">Armenia</option>
                                                    <option value="AW" data-kt-select2-country="assets/media/flags/aruba.svg">Aruba</option>
                                                    <option value="AU" data-kt-select2-country="assets/media/flags/australia.svg">Australia</option>
                                                    <option value="AT" data-kt-select2-country="assets/media/flags/austria.svg">Austria</option>
                                                    <option value="AZ" data-kt-select2-country="assets/media/flags/azerbaijan.svg">Azerbaijan</option>
                                                    <option value="BS" data-kt-select2-country="assets/media/flags/bahamas.svg">Bahamas</option>
                                                    <option value="BH" data-kt-select2-country="assets/media/flags/bahrain.svg">Bahrain</option>
                                                    <option value="BD" data-kt-select2-country="assets/media/flags/bangladesh.svg">Bangladesh</option>
                                                    <option value="BB" data-kt-select2-country="assets/media/flags/barbados.svg">Barbados</option>
                                                    <option value="BY" data-kt-select2-country="assets/media/flags/belarus.svg">Belarus</option>
                                                    <option value="BE" data-kt-select2-country="assets/media/flags/belgium.svg">Belgium</option>
                                                    <option value="BZ" data-kt-select2-country="assets/media/flags/belize.svg">Belize</option>
                                                    <option value="BJ" data-kt-select2-country="assets/media/flags/benin.svg">Benin</option>
                                                    <option value="BM" data-kt-select2-country="assets/media/flags/bermuda.svg">Bermuda</option>
                                                    <option value="BT" data-kt-select2-country="assets/media/flags/bhutan.svg">Bhutan</option>
                                                    <option value="BO" data-kt-select2-country="assets/media/flags/bolivia.svg">Bolivia, Plurinational State of</option>
                                                    <option value="BQ" data-kt-select2-country="assets/media/flags/bonaire.svg">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA" data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.svg">Bosnia and Herzegovina</option>
                                                    <option value="BW" data-kt-select2-country="assets/media/flags/botswana.svg">Botswana</option>
                                                    <option value="BR" data-kt-select2-country="assets/media/flags/brazil.svg">Brazil</option>
                                                    <option value="IO" data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.svg">British Indian Ocean Territory</option>
                                                    <option value="BN" data-kt-select2-country="assets/media/flags/brunei.svg">Brunei Darussalam</option>
                                                    <option value="BG" data-kt-select2-country="assets/media/flags/bulgaria.svg">Bulgaria</option>
                                                    <option value="BF" data-kt-select2-country="assets/media/flags/burkina-faso.svg">Burkina Faso</option>
                                                    <option value="BI" data-kt-select2-country="assets/media/flags/burundi.svg">Burundi</option>
                                                    <option value="KH" data-kt-select2-country="assets/media/flags/cambodia.svg">Cambodia</option>
                                                    <option value="CM" data-kt-select2-country="assets/media/flags/cameroon.svg">Cameroon</option>
                                                    <option value="CA" data-kt-select2-country="assets/media/flags/canada.svg">Canada</option>
                                                    <option value="CV" data-kt-select2-country="assets/media/flags/cape-verde.svg">Cape Verde</option>
                                                    <option value="KY" data-kt-select2-country="assets/media/flags/cayman-islands.svg">Cayman Islands</option>
                                                    <option value="CF" data-kt-select2-country="assets/media/flags/central-african-republic.svg">Central African Republic</option>
                                                    <option value="TD" data-kt-select2-country="assets/media/flags/chad.svg">Chad</option>
                                                    <option value="CL" data-kt-select2-country="assets/media/flags/chile.svg">Chile</option>
                                                    <option value="CN" data-kt-select2-country="assets/media/flags/china.svg">China</option>
                                                    <option value="CX" data-kt-select2-country="assets/media/flags/christmas-island.svg">Christmas Island</option>
                                                    <option value="CC" data-kt-select2-country="assets/media/flags/cocos-island.svg">Cocos (Keeling) Islands</option>
                                                    <option value="CO" data-kt-select2-country="assets/media/flags/colombia.svg">Colombia</option>
                                                    <option value="KM" data-kt-select2-country="assets/media/flags/comoros.svg">Comoros</option>
                                                    <option value="CK" data-kt-select2-country="assets/media/flags/cook-islands.svg">Cook Islands</option>
                                                    <option value="CR" data-kt-select2-country="assets/media/flags/costa-rica.svg">Costa Rica</option>
                                                    <option value="CI" data-kt-select2-country="assets/media/flags/ivory-coast.svg">Côte d'Ivoire</option>
                                                    <option value="HR" data-kt-select2-country="assets/media/flags/croatia.svg">Croatia</option>
                                                    <option value="CU" data-kt-select2-country="assets/media/flags/cuba.svg">Cuba</option>
                                                    <option value="CW" data-kt-select2-country="assets/media/flags/curacao.svg">Curaçao</option>
                                                    <option value="CZ" data-kt-select2-country="assets/media/flags/czech-republic.svg">Czech Republic</option>
                                                    <option value="DK" data-kt-select2-country="assets/media/flags/denmark.svg">Denmark</option>
                                                    <option value="DJ" data-kt-select2-country="assets/media/flags/djibouti.svg">Djibouti</option>
                                                    <option value="DM" data-kt-select2-country="assets/media/flags/dominica.svg">Dominica</option>
                                                    <option value="DO" data-kt-select2-country="assets/media/flags/dominican-republic.svg">Dominican Republic</option>
                                                    <option value="EC" data-kt-select2-country="assets/media/flags/ecuador.svg">Ecuador</option>
                                                    <option value="EG" data-kt-select2-country="assets/media/flags/egypt.svg">Egypt</option>
                                                    <option value="SV" data-kt-select2-country="assets/media/flags/el-salvador.svg">El Salvador</option>
                                                    <option value="GQ" data-kt-select2-country="assets/media/flags/equatorial-guinea.svg">Equatorial Guinea</option>
                                                    <option value="ER" data-kt-select2-country="assets/media/flags/eritrea.svg">Eritrea</option>
                                                    <option value="EE" data-kt-select2-country="assets/media/flags/estonia.svg">Estonia</option>
                                                    <option value="ET" data-kt-select2-country="assets/media/flags/ethiopia.svg">Ethiopia</option>
                                                    <option value="FK" data-kt-select2-country="assets/media/flags/falkland-islands.svg">Falkland Islands (Malvinas)</option>
                                                    <option value="FJ" data-kt-select2-country="assets/media/flags/fiji.svg">Fiji</option>
                                                    <option value="FI" data-kt-select2-country="assets/media/flags/finland.svg">Finland</option>
                                                    <option value="FR" data-kt-select2-country="assets/media/flags/france.svg">France</option>
                                                    <option value="PF" data-kt-select2-country="assets/media/flags/french-polynesia.svg">French Polynesia</option>
                                                    <option value="GA" data-kt-select2-country="assets/media/flags/gabon.svg">Gabon</option>
                                                    <option value="GM" data-kt-select2-country="assets/media/flags/gambia.svg">Gambia</option>
                                                    <option value="GE" data-kt-select2-country="assets/media/flags/georgia.svg">Georgia</option>
                                                    <option value="DE" data-kt-select2-country="assets/media/flags/germany.svg">Germany</option>
                                                    <option value="GH" data-kt-select2-country="assets/media/flags/ghana.svg">Ghana</option>
                                                    <option value="GI" data-kt-select2-country="assets/media/flags/gibraltar.svg">Gibraltar</option>
                                                    <option value="GR" data-kt-select2-country="assets/media/flags/greece.svg">Greece</option>
                                                    <option value="GL" data-kt-select2-country="assets/media/flags/greenland.svg">Greenland</option>
                                                    <option value="GD" data-kt-select2-country="assets/media/flags/grenada.svg">Grenada</option>
                                                    <option value="GU" data-kt-select2-country="assets/media/flags/guam.svg">Guam</option>
                                                    <option value="GT" data-kt-select2-country="assets/media/flags/guatemala.svg">Guatemala</option>
                                                    <option value="GG" data-kt-select2-country="assets/media/flags/guernsey.svg">Guernsey</option>
                                                    <option value="GN" data-kt-select2-country="assets/media/flags/guinea.svg">Guinea</option>
                                                    <option value="GW" data-kt-select2-country="assets/media/flags/guinea-bissau.svg">Guinea-Bissau</option>
                                                    <option value="HT" data-kt-select2-country="assets/media/flags/haiti.svg">Haiti</option>
                                                    <option value="VA" data-kt-select2-country="assets/media/flags/vatican-city.svg">Holy See (Vatican City State)</option>
                                                    <option value="HN" data-kt-select2-country="assets/media/flags/honduras.svg">Honduras</option>
                                                    <option value="HK" data-kt-select2-country="assets/media/flags/hong-kong.svg">Hong Kong</option>
                                                    <option value="HU" data-kt-select2-country="assets/media/flags/hungary.svg">Hungary</option>
                                                    <option value="IS" data-kt-select2-country="assets/media/flags/iceland.svg">Iceland</option>
                                                    <option value="IN" data-kt-select2-country="assets/media/flags/india.svg">India</option>
                                                    <option value="ID" data-kt-select2-country="assets/media/flags/indonesia.svg">Indonesia</option>
                                                    <option value="IR" data-kt-select2-country="assets/media/flags/iran.svg">Iran, Islamic Republic of</option>
                                                    <option value="IQ" data-kt-select2-country="assets/media/flags/iraq.svg">Iraq</option>
                                                    <option value="IE" data-kt-select2-country="assets/media/flags/ireland.svg">Ireland</option>
                                                    <option value="IM" data-kt-select2-country="assets/media/flags/isle-of-man.svg">Isle of Man</option>
                                                    <option value="IL" data-kt-select2-country="assets/media/flags/israel.svg">Israel</option>
                                                    <option value="IT" data-kt-select2-country="assets/media/flags/italy.svg">Italy</option>
                                                    <option value="JM" data-kt-select2-country="assets/media/flags/jamaica.svg">Jamaica</option>
                                                    <option value="JP" data-kt-select2-country="assets/media/flags/japan.svg">Japan</option>
                                                    <option value="JE" data-kt-select2-country="assets/media/flags/jersey.svg">Jersey</option>
                                                    <option value="JO" data-kt-select2-country="assets/media/flags/jordan.svg">Jordan</option>
                                                    <option value="KZ" data-kt-select2-country="assets/media/flags/kazakhstan.svg">Kazakhstan</option>
                                                    <option value="KE" data-kt-select2-country="assets/media/flags/kenya.svg">Kenya</option>
                                                    <option value="KI" data-kt-select2-country="assets/media/flags/kiribati.svg">Kiribati</option>
                                                    <option value="KP" data-kt-select2-country="assets/media/flags/north-korea.svg">Korea, Democratic People's Republic of</option>
                                                    <option value="KW" data-kt-select2-country="assets/media/flags/kuwait.svg">Kuwait</option>
                                                    <option value="KG" data-kt-select2-country="assets/media/flags/kyrgyzstan.svg">Kyrgyzstan</option>
                                                    <option value="LA" data-kt-select2-country="assets/media/flags/laos.svg">Lao People's Democratic Republic</option>
                                                    <option value="LV" data-kt-select2-country="assets/media/flags/latvia.svg">Latvia</option>
                                                    <option value="LB" data-kt-select2-country="assets/media/flags/lebanon.svg">Lebanon</option>
                                                    <option value="LS" data-kt-select2-country="assets/media/flags/lesotho.svg">Lesotho</option>
                                                    <option value="LR" data-kt-select2-country="assets/media/flags/liberia.svg">Liberia</option>
                                                    <option value="LY" data-kt-select2-country="assets/media/flags/libya.svg">Libya</option>
                                                    <option value="LI" data-kt-select2-country="assets/media/flags/liechtenstein.svg">Liechtenstein</option>
                                                    <option value="LT" data-kt-select2-country="assets/media/flags/lithuania.svg">Lithuania</option>
                                                    <option value="LU" data-kt-select2-country="assets/media/flags/luxembourg.svg">Luxembourg</option>
                                                    <option value="MO" data-kt-select2-country="assets/media/flags/macao.svg">Macao</option>
                                                    <option value="MG" data-kt-select2-country="assets/media/flags/madagascar.svg">Madagascar</option>
                                                    <option value="MW" data-kt-select2-country="assets/media/flags/malawi.svg">Malawi</option>
                                                    <option value="MY" data-kt-select2-country="assets/media/flags/malaysia.svg">Malaysia</option>
                                                    <option value="MV" data-kt-select2-country="assets/media/flags/maldives.svg">Maldives</option>
                                                    <option value="ML" data-kt-select2-country="assets/media/flags/mali.svg">Mali</option>
                                                    <option value="MT" data-kt-select2-country="assets/media/flags/malta.svg">Malta</option>
                                                    <option value="MH" data-kt-select2-country="assets/media/flags/marshall-island.svg">Marshall Islands</option>
                                                    <option value="MQ" data-kt-select2-country="assets/media/flags/martinique.svg">Martinique</option>
                                                    <option value="MR" data-kt-select2-country="assets/media/flags/mauritania.svg">Mauritania</option>
                                                    <option value="MU" data-kt-select2-country="assets/media/flags/mauritius.svg">Mauritius</option>
                                                    <option value="MX" data-kt-select2-country="assets/media/flags/mexico.svg">Mexico</option>
                                                    <option value="FM" data-kt-select2-country="assets/media/flags/micronesia.svg">Micronesia, Federated States of</option>
                                                    <option value="MD" data-kt-select2-country="assets/media/flags/moldova.svg">Moldova, Republic of</option>
                                                    <option value="MC" data-kt-select2-country="assets/media/flags/monaco.svg">Monaco</option>
                                                    <option value="MN" data-kt-select2-country="assets/media/flags/mongolia.svg">Mongolia</option>
                                                    <option value="ME" data-kt-select2-country="assets/media/flags/montenegro.svg">Montenegro</option>
                                                    <option value="MS" data-kt-select2-country="assets/media/flags/montserrat.svg">Montserrat</option>
                                                    <option value="MA" data-kt-select2-country="assets/media/flags/morocco.svg">Morocco</option>
                                                    <option value="MZ" data-kt-select2-country="assets/media/flags/mozambique.svg">Mozambique</option>
                                                    <option value="MM" data-kt-select2-country="assets/media/flags/myanmar.svg">Myanmar</option>
                                                    <option value="NA" data-kt-select2-country="assets/media/flags/namibia.svg">Namibia</option>
                                                    <option value="NR" data-kt-select2-country="assets/media/flags/nauru.svg">Nauru</option>
                                                    <option value="NP" data-kt-select2-country="assets/media/flags/nepal.svg">Nepal</option>
                                                    <option value="NL" data-kt-select2-country="assets/media/flags/netherlands.svg">Netherlands</option>
                                                    <option value="NZ" data-kt-select2-country="assets/media/flags/new-zealand.svg">New Zealand</option>
                                                    <option value="NI" data-kt-select2-country="assets/media/flags/nicaragua.svg">Nicaragua</option>
                                                    <option value="NE" data-kt-select2-country="assets/media/flags/niger.svg">Niger</option>
                                                    <option value="NG" data-kt-select2-country="assets/media/flags/nigeria.svg">Nigeria</option>
                                                    <option value="NU" data-kt-select2-country="assets/media/flags/niue.svg">Niue</option>
                                                    <option value="NF" data-kt-select2-country="assets/media/flags/norfolk-island.svg">Norfolk Island</option>
                                                    <option value="MP" data-kt-select2-country="assets/media/flags/northern-mariana-islands.svg">Northern Mariana Islands</option>
                                                    <option value="NO" data-kt-select2-country="assets/media/flags/norway.svg">Norway</option>
                                                    <option value="OM" data-kt-select2-country="assets/media/flags/oman.svg">Oman</option>
                                                    <option value="PK" data-kt-select2-country="assets/media/flags/pakistan.svg">Pakistan</option>
                                                    <option value="PW" data-kt-select2-country="assets/media/flags/palau.svg">Palau</option>
                                                    <option value="PS" data-kt-select2-country="assets/media/flags/palestine.svg">Palestinian Territory, Occupied</option>
                                                    <option value="PA" data-kt-select2-country="assets/media/flags/panama.svg">Panama</option>
                                                    <option value="PG" data-kt-select2-country="assets/media/flags/papua-new-guinea.svg">Papua New Guinea</option>
                                                    <option value="PY" data-kt-select2-country="assets/media/flags/paraguay.svg">Paraguay</option>
                                                    <option value="PE" data-kt-select2-country="assets/media/flags/peru.svg">Peru</option>
                                                    <option value="PH" data-kt-select2-country="assets/media/flags/philippines.svg">Philippines</option>
                                                    <option value="PL" data-kt-select2-country="assets/media/flags/poland.svg">Poland</option>
                                                    <option value="PT" data-kt-select2-country="assets/media/flags/portugal.svg">Portugal</option>
                                                    <option value="PR" data-kt-select2-country="assets/media/flags/puerto-rico.svg">Puerto Rico</option>
                                                    <option value="QA" data-kt-select2-country="assets/media/flags/qatar.svg">Qatar</option>
                                                    <option value="RO" data-kt-select2-country="assets/media/flags/romania.svg">Romania</option>
                                                    <option value="RU" data-kt-select2-country="assets/media/flags/russia.svg">Russian Federation</option>
                                                    <option value="RW" data-kt-select2-country="assets/media/flags/rwanda.svg">Rwanda</option>
                                                    <option value="BL" data-kt-select2-country="assets/media/flags/st-barts.svg">Saint Barthélemy</option>
                                                    <option value="KN" data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.svg">Saint Kitts and Nevis</option>
                                                    <option value="LC" data-kt-select2-country="assets/media/flags/st-lucia.svg">Saint Lucia</option>
                                                    <option value="MF" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Saint Martin (French part)</option>
                                                    <option value="VC" data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.svg">Saint Vincent and the Grenadines</option>
                                                    <option value="WS" data-kt-select2-country="assets/media/flags/samoa.svg">Samoa</option>
                                                    <option value="SM" data-kt-select2-country="assets/media/flags/san-marino.svg">San Marino</option>
                                                    <option value="ST" data-kt-select2-country="assets/media/flags/sao-tome-and-prince.svg">Sao Tome and Principe</option>
                                                    <option value="SA" data-kt-select2-country="assets/media/flags/saudi-arabia.svg">Saudi Arabia</option>
                                                    <option value="SN" data-kt-select2-country="assets/media/flags/senegal.svg">Senegal</option>
                                                    <option value="RS" data-kt-select2-country="assets/media/flags/serbia.svg">Serbia</option>
                                                    <option value="SC" data-kt-select2-country="assets/media/flags/seychelles.svg">Seychelles</option>
                                                    <option value="SL" data-kt-select2-country="assets/media/flags/sierra-leone.svg">Sierra Leone</option>
                                                    <option value="SG" data-kt-select2-country="assets/media/flags/singapore.svg">Singapore</option>
                                                    <option value="SX" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Sint Maarten (Dutch part)</option>
                                                    <option value="SK" data-kt-select2-country="assets/media/flags/slovakia.svg">Slovakia</option>
                                                    <option value="SI" data-kt-select2-country="assets/media/flags/slovenia.svg">Slovenia</option>
                                                    <option value="SB" data-kt-select2-country="assets/media/flags/solomon-islands.svg">Solomon Islands</option>
                                                    <option value="SO" data-kt-select2-country="assets/media/flags/somalia.svg">Somalia</option>
                                                    <option value="ZA" data-kt-select2-country="assets/media/flags/south-africa.svg">South Africa</option>
                                                    <option value="KR" data-kt-select2-country="assets/media/flags/south-korea.svg">South Korea</option>
                                                    <option value="SS" data-kt-select2-country="assets/media/flags/south-sudan.svg">South Sudan</option>
                                                    <option value="ES" data-kt-select2-country="assets/media/flags/spain.svg">Spain</option>
                                                    <option value="LK" data-kt-select2-country="assets/media/flags/sri-lanka.svg">Sri Lanka</option>
                                                    <option value="SD" data-kt-select2-country="assets/media/flags/sudan.svg">Sudan</option>
                                                    <option value="SR" data-kt-select2-country="assets/media/flags/suriname.svg">Suriname</option>
                                                    <option value="SZ" data-kt-select2-country="assets/media/flags/swaziland.svg">Swaziland</option>
                                                    <option value="SE" data-kt-select2-country="assets/media/flags/sweden.svg">Sweden</option>
                                                    <option value="CH" data-kt-select2-country="assets/media/flags/switzerland.svg">Switzerland</option>
                                                    <option value="SY" data-kt-select2-country="assets/media/flags/syria.svg">Syrian Arab Republic</option>
                                                    <option value="TW" data-kt-select2-country="assets/media/flags/taiwan.svg">Taiwan, Province of China</option>
                                                    <option value="TJ" data-kt-select2-country="assets/media/flags/tajikistan.svg">Tajikistan</option>
                                                    <option value="TZ" data-kt-select2-country="assets/media/flags/tanzania.svg">Tanzania, United Republic of</option>
                                                    <option value="TH" data-kt-select2-country="assets/media/flags/thailand.svg">Thailand</option>
                                                    <option value="TG" data-kt-select2-country="assets/media/flags/togo.svg">Togo</option>
                                                    <option value="TK" data-kt-select2-country="assets/media/flags/tokelau.svg">Tokelau</option>
                                                    <option value="TO" data-kt-select2-country="assets/media/flags/tonga.svg">Tonga</option>
                                                    <option value="TT" data-kt-select2-country="assets/media/flags/trinidad-and-tobago.svg">Trinidad and Tobago</option>
                                                    <option value="TN" data-kt-select2-country="assets/media/flags/tunisia.svg">Tunisia</option>
                                                    <option value="TR" data-kt-select2-country="assets/media/flags/turkey.svg">Turkey</option>
                                                    <option value="TM" data-kt-select2-country="assets/media/flags/turkmenistan.svg">Turkmenistan</option>
                                                    <option value="TC" data-kt-select2-country="assets/media/flags/turks-and-caicos.svg">Turks and Caicos Islands</option>
                                                    <option value="TV" data-kt-select2-country="assets/media/flags/tuvalu.svg">Tuvalu</option>
                                                    <option value="UG" data-kt-select2-country="assets/media/flags/uganda.svg">Uganda</option>
                                                    <option value="UA" data-kt-select2-country="assets/media/flags/ukraine.svg">Ukraine</option>
                                                    <option value="AE" data-kt-select2-country="assets/media/flags/united-arab-emirates.svg">United Arab Emirates</option>
                                                    <option value="GB" data-kt-select2-country="assets/media/flags/united-kingdom.svg">United Kingdom</option>
                                                    <option value="US" data-kt-select2-country="assets/media/flags/united-states.svg">United States</option>
                                                    <option value="UY" data-kt-select2-country="assets/media/flags/uruguay.svg">Uruguay</option>
                                                    <option value="UZ" data-kt-select2-country="assets/media/flags/uzbekistan.svg">Uzbekistan</option>
                                                    <option value="VU" data-kt-select2-country="assets/media/flags/vanuatu.svg">Vanuatu</option>
                                                    <option value="VE" data-kt-select2-country="assets/media/flags/venezuela.svg">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN" data-kt-select2-country="assets/media/flags/vietnam.svg">Vietnam</option>
                                                    <option value="VI" data-kt-select2-country="assets/media/flags/virgin-islands.svg">Virgin Islands</option>
                                                    <option value="YE" data-kt-select2-country="assets/media/flags/yemen.svg">Yemen</option>
                                                    <option value="ZM" data-kt-select2-country="assets/media/flags/zambia.svg">Zambia</option>
                                                    <option value="ZW" data-kt-select2-country="assets/media/flags/zimbabwe.svg">Zimbabwe</option>
                                                </select>
                                                <label for="kt_ecommerce_edit_order_shipping_country">Select a country</label>
                                            </div>
                                            <!--end::Select2-->
                                        </div>
                                        <!--end::Input group-->
                                    </div> --}}
                                    <!--end::Shipping address-->
                                </div>
                                <!--end::Billing address-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Order details-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_edit_order_cancel" class="btn btn-light me-5">Cancel</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>

<script>

var noOfAddon = document.getElementById('no_of_addon');
var pPI = document.getElementById('p_p_i');
var tP = document.getElementById('t_p');
var pPP = document.getElementById('price_per_person');
var bPP = document.getElementById('balance_per_person');

pPP.onchange = function(e){
    var val = e.target.value;
    if(noOfAddon.value != ''){
        bPP.value = val; 
    }
}

pPP.onkeyup = function(e){
    var val = e.target.value;
    bPP.value = val; 
}


noOfAddon.onchange = function(e){
    var val = e.target.value;
    if(pPI.value != ''){
        // tP.value = noOfAddon.value*val; 
        tP.value = pPI.value*val; 
    }
}

pPI.onchange = function(e){
    var val = e.target.value;
    if(noOfAddon.value != ''){
        tP.value = noOfAddon.value*val; 
    }
}

pPI.onkeyup = function(e){
    var val = e.target.value;
    if(noOfAddon.value != ''){
        tP.value = noOfAddon.value*val; 
    }
}

var num = document.getElementById('t_traveler_no');
var travsEle = document.getElementById('travs');
num.onchange = function(e){
    var showTrav = e.target.value;
    var travs = '';
    // const node = document.createElement("DIV");
    // node.setAttribute('class', 'flex-row-fluid w-25');
    console.log(showTrav);
    for(var i=0; i<showTrav; i++){
        travs = travs + `<div class="flex-row-fluid">
            <label class="required form-label">Traveler ${i+1}</label>
        
            <div class="d-flex justify-content-between gap-5">
                <div class="w-50">
                    <select class="form-select mb-2" name="traveler_name1[]" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="travelers_${i+1}" id="travelers_${i+1}">
                        <option>Select an option</option>
                        <option value="none">Mr.</option>
                        <option value="standard">MS.</option>
                        <option value="express">MRS</option>
                    </select>
                </div>
                <div class="w-50">
                    <input type="text" class="form-control" name="traveler_name2[]" />
                </div>
            </div>
        
        </div> `;
        // const textnode = document.createTextNode(travs);
        // node.appendChild(travs);
    }

    
    // node.innerHTML = travs
    // node.appendChild(textnode);
    // travsEle.appendChild(node);
    travsEle.innerHTML = travs
}
var notesAll = document.getElementById('notes_all');
var newNote = `<div class="fv-row flex-row-fluid">
        <label class="form-label">Notes</label>
        <textarea name="notes[]" class="form-control" id="" cols="30" rows="5"></textarea>
    </div>`
var btnMore = document.getElementById('btnMore');
btnMore.onclick = function(e){
    var noteData = notesAll.innerHTML;
    notesAll.innerHTML = noteData + newNote
}

</script>
  
</x-base-layout>
  