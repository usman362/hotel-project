  <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="{{url('/')}}"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item sidebar-group-active menu-collapsed-open"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate">Dashboard</span></a>

                </li>
                <li class=" navigation-header"><span>Product Modules</span><i data-feather="more-horizontal"></i>
                </li>


                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i data-feather="globe"></i><span class="menu-title text-truncate">Destinations</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('destination.create')}}"><i data-feather="plus-circle"></i><span class="menu-item text-truncate">Add New</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('destination.index')}}"><i data-feather="align-left"></i><span class="menu-item text-truncate">List All</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i data-feather="github"></i><span class="menu-title text-truncate">Activities</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('activity.create')}}"><i data-feather="plus-circle"></i><span class="menu-item text-truncate">Add New</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('activity.index')}}"><i data-feather="align-left"></i><span class="menu-item text-truncate">List All</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i data-feather="map-pin"></i><span class="menu-title text-truncate">Regions</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('region.create')}}"><i data-feather="plus-circle"></i><span class="menu-item text-truncate">Add New</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('region.index')}}"><i data-feather="align-left"></i><span class="menu-item text-truncate">List All</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i data-feather="package"></i><span class="menu-title text-truncate">Tours</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('program.create')}}"><i data-feather="plus-circle"></i><span class="menu-item text-truncate">Add New</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="tag"></i><span class="menu-item text-truncate">Tour Attributes</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('program.index')}}"><i data-feather="align-left"></i><span class="menu-item text-truncate">List All</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Content Modules</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i data-feather="file-text"></i><span class="menu-title text-truncate">Pages</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('page.create')}}"><i data-feather="plus-circle"></i><span class="menu-item text-truncate">Add New</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('page.index')}}"><i data-feather="align-left"></i><span class="menu-item text-truncate">List All</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i data-feather="pen-tool"></i><span class="menu-title text-truncate">Blogs</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('blogpages.create')}}"><i data-feather="plus-circle"></i><span class="menu-item text-truncate">Add New</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('blogpages.index')}}"><i data-feather="align-left"></i><span class="menu-item text-truncate">List All</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i data-feather="save"></i><span class="menu-title text-truncate">Files</span></a>
                    <ul class="menu-content">
                        {{-- <li><a class="d-flex align-items-center" href="#"><i data-feather="file-plus"></i><span class="menu-item text-truncate">Add New</span></a>
                        </li> --}}
                        <li><a class="d-flex align-items-center" href="{{route('uploaded-files.index')}}"><i data-feather="align-left"></i><span class="menu-item text-truncate">List All</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i data-feather="star"></i><span class="menu-title text-truncate">Reviews</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('review.create')}}"><i data-feather="plus-circle"></i><span class="menu-item text-truncate">Add New</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('review.index')}}"><i data-feather="align-left"></i><span class="menu-item text-truncate">List All</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i data-feather="users"></i><span class="menu-title text-truncate">Teams</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('team.create')}}"><i data-feather="user-plus"></i><span class="menu-item text-truncate">Add New</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('team.index')}}"><i data-feather="align-left"></i><span class="menu-item text-truncate">List All</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Revenue Modules</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate">Bookings</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="plus-circle"></i><span class="menu-item text-truncate">Add New</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="align-left"></i><span class="menu-item text-truncate">List All</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)"><i data-feather="file-text"></i><span class="menu-title text-truncate">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('invoice.create')}}"><i data-feather="plus-circle"></i><span class="menu-item text-truncate">Add New</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('invoice.index')}}"><i data-feather="align-left"></i><span class="menu-item text-truncate">List All</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="send"></i><span class="menu-title text-truncate">Inquiries</span></a>
                </li>
                <li class=" navigation-header"><span>Global Modules</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('settings.index')}}"><i data-feather="settings"></i><span class="menu-title text-truncate">Settings</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="layers"></i><span class="menu-title text-truncate">Navbar</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('widgets.index')}}"><i data-feather="layout"></i><span class="menu-title text-truncate">Widgets</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="key"></i><span class="menu-title text-truncate">APIs</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user-check"></i><span class="menu-title text-truncate">Users</span></a>
                </li>
                {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="plus-circle"></i><span class="menu-item text-truncate">Add</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="align-left"></i><span class="menu-item text-truncate">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Preview</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Edit</span></a>
                        </li>

                    </ul>
                </li> --}}


                <li class=" nav-item"><a class="d-flex align-items-center" href="https://hli.helpcrunch.com/" target="_blank"><i data-feather="life-buoy"></i><span class="menu-title text-truncate" data-i18n="Raise Support">Raise Support</span></a>
                </li>
                <li class=" navigation-header"><span>Exit Session</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center logout" href="javascript:void(0)"><i data-feather="power"></i><span class="menu-title text-truncate">Logout</span></a>
                </li>


                <!-------------------End menu items-->
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
