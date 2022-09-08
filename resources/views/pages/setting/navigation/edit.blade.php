<x-base-layout>
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Member title-->
                <div  data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="Member-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Global</h1>
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
                        <li class="breadcrumb-item text-muted">Navigation</li>
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
                <!--end::Member title-->
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
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <form action="{{route('setting.nav.update')}}" method="POST" enctype="multipart/form-data" id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/categories.html">
                    @csrf
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Navigation</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Nav Name</label>
                                    <input type="text" name="nav_name" value="{{$nav->name}}" class="form-control mb-2" placeholder="Nav Name"/>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Nav Link</label>
                                    <input type="text" name="nav_link" value="{{$nav->link}}" class="form-control mb-2" placeholder="Nav Link"/>
                                </div>
                                <div class="mb-10 fv-row" >
                                    <label class="required form-label">Sub Nav</label>
                                    <div id="sub_navs">
                                        @foreach (explode(' , ', $nav->sub_navs) as $key => $item)
                                        <div class="d-flex">
                                            <input type="text" value="{{$item}}" name="sub_nav[]" class="form-control mb-2 mx-2" placeholder="Sub Nav Name" />
                                            <input type="text" value="{{explode(' , ', $nav->sub_nav_links)[$key]}}" name="sub_nav_link[]" class="form-control mb-2" placeholder="Sub Nav Link" />
                                        </div>
                                        @endforeach

                                    </div>
                                    <input type="button" value="Add More" id="addMore" class="btn btn-primary">
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
        </div>
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

        document.getElementById('addMore').onclick = function(e){
            var main = document.getElementById('sub_navs');
            var div = document.createElement('div');
            div.setAttribute('class', 'd-flex');
            var input1 = document.createElement('input');
            input1.setAttribute('type', 'text');
            input1.setAttribute('name', 'sub_nav[]');
            input1.setAttribute('class', 'form-control mb-2 mx-2');

            var input2 = document.createElement('input');
            input2.setAttribute('type', 'text');
            input2.setAttribute('name', 'sub_nav_link[]');
            input2.setAttribute('class', 'form-control mb-2');

            div.appendChild(input1);
            div.appendChild(input2);

            main.appendChild(div);

        }

    </script>
    </x-base-layout>