<?php
    // Table rows
    $tableRows = array(
        // Tab 1
        array(
            array(
                'image' => 'svg/brand-logos/plurk.svg',
                'info' => array(
                    'title' => 'Trip Name',
                    'description' => 'Customer Name'
                ),
                'technologies' => 'Starting Date',
                'status' => array(
                    'label' => 'Booking Status',
                    'color' => 'success'
                )
            ),
            array(
                'image' => 'svg/brand-logos/telegram.svg',
                'info' => array(
                    'title' => 'Popular Authors',
                    'description' => 'Most Successful'
                ),
                'technologies' => 'Python, MySQL',
                'status' => array(
                    'label' => 'In Progress',
                    'color' => 'warning'
                )
            ),
            array(
                'image' => 'svg/brand-logos/vimeo.svg',
                'info' => array(
                    'title' => 'New Users',
                    'description' => 'Awesome Users'
                ),
                'technologies' => 'Laravel,Metronic',
                'status' => array(
                    'label' => 'Success',
                    'color' => 'primary'
                )
            ),
            array(
                'image' => 'svg/brand-logos/bebo.svg',
                'info' => array(
                    'title' => 'Active Customers',
                    'description' => 'Movie Creator'
                ),
                'technologies' => 'AngularJS, C#',
                'status' => array(
                    'label' => 'Rejected',
                    'color' => 'danger'
                )
            ),
            array(
                'image' => 'svg/brand-logos/kickstarter.svg',
                'info' => array(
                    'title' => 'Bestseller Theme',
                    'description' => 'Best Customers'
                ),
                'technologies' => 'ReactJS, Ruby	',
                'status' => array(
                    'label' => 'In Progress',
                    'color' => 'warning'
                )
            ),
        ),

        // Tab 2
        array(
            array(
                'image' => 'svg/brand-logos/plurk.svg',
                'info' => array(
                    'title' => 'Brad Simmons',
                    'description' => 'Movie Creator'
                ),
                'technologies' => 'React, HTML',
                'status' => array(
                    'label' => 'Approved',
                    'color' => 'success'
                )
            ),
            array(
                'image' => 'svg/brand-logos/telegram.svg',
                'info' => array(
                    'title' => 'Popular Authors',
                    'description' => 'Most Successful'
                ),
                'technologies' => 'Python, MySQL',
                'status' => array(
                    'label' => 'In Progress',
                    'color' => 'warning'
                )
            ),
            array(
                'image' => 'svg/brand-logos/bebo.svg',
                'info' => array(
                    'title' => 'Active Customers',
                    'description' => 'Movie Creator'
                ),
                'technologies' => 'AngularJS, C#',
                'status' => array(
                    'label' => 'Rejected',
                    'color' => 'danger'
                )
            ),
        ),

        // Tab 3
        array(
            array(
                'image' => 'svg/brand-logos/kickstarter.svg',
                'info' => array(
                    'title' => 'Bestseller Theme',
                    'description' => 'Best Customers'
                ),
                'technologies' => 'ReactJS, Ruby	',
                'status' => array(
                    'label' => 'In Progress',
                    'color' => 'warning'
                )
            ),
            array(
                'image' => 'svg/brand-logos/bebo.svg',
                'info' => array(
                    'title' => 'Active Customers',
                    'description' => 'Movie Creator'
                ),
                'technologies' => 'AngularJS, C#',
                'status' => array(
                    'label' => 'Rejected',
                    'color' => 'danger'
                )
            ),
            array(
                'image' => 'svg/brand-logos/vimeo.svg',
                'info' => array(
                    'title' => 'New Users',
                    'description' => 'Awesome Users'
                ),
                'technologies' => 'Laravel,Metronic',
                'status' => array(
                    'label' => 'Success',
                    'color' => 'primary'
                )
            ),
            array(
                'image' => 'svg/brand-logos/telegram.svg',
                'info' => array(
                    'title' => 'Popular Authors',
                    'description' => 'Most Successful'
                ),
                'technologies' => 'Python, MySQL',
                'status' => array(
                    'label' => 'In Progress',
                    'color' => 'warning'
                )
            ),
        ),
    );

    $loopIndex = 0;
?>

<!--begin::Tables Widget 5-->
<div class="card {{ $class }}">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>

            <span class="text-muted mt-1 fw-bold fs-7">Numbers of remaining tours</span>
        </h3>
        <div class="card-toolbar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Day</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Monthly</a>
                </li>
            </ul>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body py-3">
        <div class="tab-content">
{{--            @foreach($tableRows as $tableRows)
                <?php
                    $loopIndex++;
                    $activeClass = $loopIndex === 1 ?  'show active' : '';
                ?>  --}}
 
 @php 
 $current = Carbon\Carbon::now();
 $week = Carbon\Carbon::now()->subWeek()->format("Y-m-d H:i:s");
 $month = Carbon\Carbon::now()->month;
$today = Carbon\Carbon::today();
 @endphp
 <!------- Day wise ----------->
 
                <!--begin::Tap pane-->
                <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="border-0">
                                   <th class="p-0 w-50px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-140px"></th>
                                    <th class="p-0 min-w-110px"></th>
                                    <th class="p-0 min-w-50px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>
                                @foreach(\App\Models\Booking::where('booking_date',$today)->get() as $row)
                                    <tr>
                                         <td>
                                            <div class="symbol symbol-45px">
                                                <span class="symbol-label">
                                                    <img src="{{ asset(theme()->getMediaUrlPath() . $row->trip_name) }}" class="h-50 align-self-center" alt=""/>
                                                </span>
                                            </div>
                                        </td> 
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $row->trip_name }}</a>
                                            <span class="text-muted fw-bold d-block">{{ implode(' ', explode(',',$row->lead_traveler)) }}</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">
                                            {{ $row->booking_date }}
                                        </td>
                                        <td class="text-end">
                                            <span class="badge badge-light-{{ $row->status }} text-black">{{ $row->status }}</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="{{route('bookings.edit', $row->id)}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                {!! theme()->getSvgIcon("icons/duotune/arrows/arr064.svg", "svg-icon-2"); !!}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                
                <!------------- Week wise ----------------------->
                
                <div class="tab-pane fade " id="kt_table_widget_5_tab_2">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="border-0">
                                     <th class="p-0 w-50px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-140px"></th>
                                    <th class="p-0 min-w-110px"></th>
                                    <th class="p-0 min-w-50px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>
                                 @foreach(\App\Models\Booking::whereBetween('booking_date', [$week, $current])->get() as $row)
                                    <tr>
                                         <td>
                                            <div class="symbol symbol-45px">
                                                <span class="symbol-label">
                                                    <img src="{{ asset(theme()->getMediaUrlPath() . $row->trip_name) }}" class="h-50 align-self-center" alt=""/>
                                                </span>
                                            </div>
                                        </td> 
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $row->trip_name }}</a>
                                            <span class="text-muted fw-bold d-block">{{ implode(' ', explode(',',$row->lead_traveler)) }}</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">
                                            {{ $row->booking_date }}
                                        </td>
                                        <td class="text-end">
                                            <span class="badge badge-light-{{ $row->status }} text-black">{{ $row->status }}</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="{{route('bookings.edit', $row->id)}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                {!! theme()->getSvgIcon("icons/duotune/arrows/arr064.svg", "svg-icon-2"); !!}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                
                <!----------------- Month Wise ---------------->
                
                <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="border-0">
                                    <th class="p-0 w-50px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-140px"></th>
                                    <th class="p-0 min-w-110px"></th>
                                    <th class="p-0 min-w-50px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>
                                @foreach(\App\Models\Booking::whereMonth('booking_date',$month)->get() as $row)
                                    <tr>
                                         <td>
                                            <div class="symbol symbol-45px">
                                                <span class="symbol-label">
                                                    <img src="{{ asset(theme()->getMediaUrlPath() . $row->trip_name) }}" class="h-50 align-self-center" alt=""/>
                                                </span>
                                            </div>
                                        </td> 
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $row->trip_name }}</a>
                                            <span class="text-muted fw-bold d-block">{{ implode(' ', explode(',',$row->lead_traveler)) }}</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">
                                            {{ $row->booking_date }}
                                        </td>
                                        <td class="text-end">
                                            <span class="badge badge-light-{{ $row->status }} text-black">{{ $row->status }}</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="{{route('bookings.edit', $row->id)}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                {!! theme()->getSvgIcon("icons/duotune/arrows/arr064.svg", "svg-icon-2"); !!}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                
                <!--end::Tap pane-->
         {{--   @endforeach --}}
        </div>
    </div>
    <!--end::Body-->
</div>
<!--end::Tables Widget 5-->
