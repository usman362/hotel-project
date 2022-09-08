<x-base-layout>

    <div class="post d-flex flex-column-fluid" id="kt_post">
      <!--begin::Container-->
      <div id="kt_content_container" class="container-xxl p-0">
          <!--begin::Products-->
          <div class="card card-flush">
              <!--begin::Card header-->
              <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                  <!--begin::Card title-->
                  <div class="card-title">
                      <!--begin::Search-->
                      <div class="d-flex align-items-center position-relative my-1">
                          <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                          <span class="svg-icon svg-icon-1 position-absolute ms-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                  <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                              </svg>
                          </span>
                          <!--end::Svg Icon-->
                          <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Review" />
                      </div>
                      <!--end::Search-->
                  </div>
                  <!--end::Card title-->
                  <!--begin::Card toolbar-->
                  <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                     
                      <a href="{{route('review.create')}}" class="btn btn-primary">Add Review</a>
                      <!--end::Add product-->
                  </div>
                  <!--end::Card toolbar-->
              </div>
              <!--end::Card header-->
              <!--begin::Card body-->
              <div class="card-body pt-0">
                  <!--begin::Table-->
                  <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                      <!--begin::Table head-->
                      <thead>
                          <!--begin::Table row-->
                          <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                              <th class="w-10px pe-2">
                                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                      <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
                                  </div>
                              </th>
                              <th class="">Id</th>
                              <th class="">Title</th>
                              <th class="">Person Name</th>
                              <th class="">Image</th>
                              <th class="">Rating(1 to 5)</th>
                              <th class="">Status</th>
                              <th class="">Actions</th>
                          </tr>
                          <!--end::Table row-->
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody class="fw-bold text-gray-600">
                          <!--end::Table row-->
                          @foreach ($reviews as $item)
                          <tr>
                              <!--begin::Checkbox-->
                              <td>
                                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                                      <input class="form-check-input" type="checkbox" value="1" />
                                  </div>
                              </td>
                              <!--end::Checkbox-->
                              <!--begin::Order ID=-->
                         
                              <!--end::Order ID=-->
                              <!--begin::Customer=-->
                            <td class="" data-order="2022-01-12">
                                <span class="fw-bolder">{{$item->id}}</span>
                            </td>

                            <td>
                                <a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">{{$item->title}}</a>
                            </td>

                            <td class="" data-order="2022-01-12">
                                <span class="fw-bolder">{{$item->name}}</span>
                            </td>

                         


                            <td data-kt-ecommerce-order-filter="order_id">
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="{{asset('images/'. $item->avatar)}}" alt="Max Smith" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </td>

                            <td class="" data-order="2022-01-12">
                                <span class="fw-bolder">
                                    @for ($i=0; $i<intval($item->rating); $i++)
                                        <i class="bi bi-star fs-7" style="color: #FDCC0D;"></i>
                                    @endfor
                                </span>
                            </td>

                            <td class="" data-order="2022-01-12">
                                <span class="fw-bolder">{{$item->status}}</span>
                            </td>
                    
                            <td class="">
                                  <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                  <span class="svg-icon svg-icon-5 m-0">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                          <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                      </svg>
                                  </span>
                                  <!--end::Svg Icon--></a>
                                  <!--begin::Menu-->
                                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                      <!--begin::Menu item-->
                                      <div class="menu-item px-3">
                                          <a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                      </div>
                                      <!--end::Menu item-->
                                      <!--begin::Menu item-->
                                     @if(Auth::user()->role == 'superadmin' || Auth::user()->role == 'admin')
                                      <div class="menu-item px-3">
                                          <a href="{{route('review.edit', $item->id)}}" class="menu-link px-3">Edit</a>
                                      </div>
                                      <!--end::Menu item-->
                                      <!--begin::Menu item-->
                                     @if(Auth::user()->role == 'superadmin')
                                      <div class="menu-item px-3">
                                          <a href="{{route('review.delete', $item->id)}}" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                      </div>
                                      @endif
                                      @endif
                                      <!--end::Menu item-->
                                  </div>
                                  <!--end::Menu-->
                              </td>
                              <!--end::Action=-->
                          </tr>
                          @endforeach
                     
                          <!--end::Table row-->
                      </tbody>
                      <!--end::Table body-->
                  </table>
                  <!--end::Table-->
              </div>
              <!--end::Card body-->
          </div>
          <!--end::Products-->
      </div>
      <!--end::Container-->
  </div>
  
  
  
  
  
  
  </x-base-layout>
  