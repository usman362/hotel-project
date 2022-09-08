<x-base-layout>
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Review title-->
                <div  data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="Review-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Review</h1>
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
                        <li class="breadcrumb-item text-muted">Review</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Edit a Review</li>
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
                <!--end::Review title-->
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
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Review Type:</label>
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
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <form class="form d-flex flex-column flex-lg-row" method="POST" action="{{route('review.update', $review->id)}}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <!--begin::Thumbnail settings-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Reviewer Image</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url('{{asset('images/'. $review->avatar)}}')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <!--begin::Icon-->
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--end::Icon-->
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="text-muted fs-7">Set the Reviewer image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Status</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select class="form-select mb-2" name="status" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="status">
                                    <option></option>
                                    <option value="published" @if ($review->status == 'published') selected="selected" @endif>Published</option>
                                    <option value="unpublished"  @if ($review->status == 'unpublished') selected="selected" @endif>Unpublished</option>
                                </select>
                            </div>
                        </div>

                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Featured?</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select class="form-select mb-2" name="featured" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="featured">
                                    <option></option>
                                    <option value="Yes" @if ($review->featured == 'Yes') selected="selected" @endif >Yes</option>
                                    <option value="No" @if ($review->featured == 'No') selected="selected" @endif>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Review</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Select Destination</label>
                                    <select class="form-select mb-2" data-control="select2" name="destination" data-hide-search="true" data-placeholder="Select an option" id="dest">
                                        <option>Select Destination</option>
                                    </select>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Select Activity</label>
                                    <select class="form-select mb-2" data-control="select2" name="activity" data-hide-search="true" data-placeholder="Select an option" id="activity">
                                        <option>Select Activity</option>
                                    </select>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Select Region</label>
                                    <select class="form-select mb-2" data-control="select2" name="region" data-hide-search="true" data-placeholder="Select an option" id="region">
                                        <option>Select Region</option>
                                    </select>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Select Trip</label>
                                    <select class="form-select mb-2" data-control="select2" name="trip" data-hide-search="true" data-placeholder="Select an option" id="trip">
                                        <option>Select Trip</option>
                                    </select>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Review Title</label>
                                    <input type="text" name="review_title" value="{{$review->title}}" class="form-control mb-2" placeholder="Review Title" />
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Reviewer Name</label>
                                    <input type="text" name="reviewer_name" value="{{$review->name}}" class="form-control mb-2" placeholder="Reviewer Name" />
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Reviewer Country</label>
                                        <select class="form-select" data-control="select2" data-hide-search="false" data-placeholder="Select an country" id="kt_ecommerce_edit_order_billing_country" name="country">
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
                                            <option value="CA" selected data-kt-select2-country="assets/media/flags/canada.svg">Canada</option>
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
                                </div>
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Reviewer Date</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="date" value="{{$review->date}}" name="date" class="form-control mb-2" placeholder="Profile Order" value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    {{-- <div class="text-muted fs-7">A category name is required and recommended to be unique.</div> --}}
                                    <!--end::Description-->
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Rating</label>
                                    <select class="form-select mb-2" data-control="select2" name="rating" data-hide-search="true" data-placeholder="Select an option" id="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5" selected>5</option>
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">Review Content</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    {{-- <div id="kt_ecommerce_add_category_description" name="kt_ecommerce_add_category_description" class="min-h-200px mb-2"></div> --}}
                                    <textarea name="content" class="form-control" id="summernote" cols="20" rows="5">{{$review->content}}</textarea>
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    {{-- <div class="text-muted fs-7">Set a description to the category for better visibility.</div> --}}
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>

                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
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