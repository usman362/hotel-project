@php
    $chartColor = $chartColor ?? 'primary';
    $chartHeight = $chartHeight ?? '175px';
@endphp

<!--begin::Mixed Widget 10-->
<div class="card {{ $class }}">
    <!--begin::Body-->
    <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
        <!--begin::Hidden-->
        <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
            <div class="me-2">
                <span class="fw-bolder text-gray-800 d-block fs-3">Statistics</span>

                <span class="text-gray-400 fw-bold">Jul 1 - Jul 17 {{ date("y") }}</span>
            </div>

             <div class="me-2">
                <span class="fw-bolder text-gray-800 d-block fs-3">127</span>

                <span class="text-gray-400 fw-bold">Remaining Bookings</span>
            </div>
        </div>
        <!--end::Hidden-->

        <!--begin::Chart-->
        <div class="mixed-widget-10-chart" data-kt-color="{{ $chartColor }}" data-kt-chart-url="{{ route('profits') }}" style="height: {{ $chartHeight }}"></div>
        <!--end::Chart-->
    </div>
</div>
<!--end::Mixed Widget 10-->
