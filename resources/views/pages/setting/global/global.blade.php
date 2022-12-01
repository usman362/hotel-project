@section('title','Settings')

@extends('layouts.app')

@section('content')


 <!-- BEGIN: Content-->
 <div class="app-content content ">

    @if(session()->has('success'))
    <div class="alert alert-primary pd-4" role="alert">
{{ session()->get('success') }}
</div>
@endif
@php
$logo = App\Models\Upload::find(Setting::get('logo'));
$icon = App\Models\Upload::find(Setting::get('icon'));
@endphp
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Settings</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">




            <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Settings</h4>
                            </div>
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">Website Name</label>
                                                <input type="text" id="last-name-column" name="website_name" class="form-control" placeholder="Ex. Himalayan Leisure" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex mb-1">

                                               <a href="#" class="me-25">
                                                    <img src="{{asset($icon->file_name ?? 'app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="icon_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                                </a>

                                                <!-- upload and reset button -->
                                                <div class="d-flex align-items-end mt-75 ms-1">
                                                    <div>
                                                        <div class="alert alert-primary" role="alert">
                                                            <div class="alert-body"><strong>Favicon</strong><code>(only PNG)</code></div>
                                                        </div>
                                                        <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="icon" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                        <input type="hidden" name="icon" value="{{Setting::get('icon')}}">
                                                        <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary resetImage mb-75 waves-effect" data-name="icon">Reset</button>
                                                    </div>
                                                </div>

                                                <!--/ upload and reset button -->
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="d-flex mb-1">

                                                <a href="#" class="me-25">
                                                    <img src="{{asset($logo->file_name ?? 'app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="logo_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                                </a>


                                                <!-- upload and reset button -->
                                                <div class="d-flex align-items-end mt-75 ms-1">
                                                    <div>
                                                        <div class="alert alert-primary" role="alert">
                                                            <div class="alert-body"><strong>Website Logo</strong><code>(Only Svg)</code></div>
                                                        </div>
                                                        <label class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light uploadModal" data-bs-toggle="modal" data-name="logo" data-bs-target="#new-upload-modal">Upload</label>
                                                        <input type="hidden" name="logo" value="{{Setting::get('logo')}}">
                                                        <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary resetImage mb-75 waves-effect" data-name="logo">Reset</button>
                                                    </div>
                                                </div>

                                                <!--/ upload and reset button -->
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="d-flex mb-1">

                                                <a href="#" class="me-25">
                                                    <img src="{{asset($logo->file_name ?? 'app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="404_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                                </a>


                                                <!-- upload and reset button -->
                                                <div class="d-flex align-items-end mt-75 ms-1">
                                                    <div>
                                                        <div class="alert alert-primary" role="alert">
                                                            <div class="alert-body"><strong>404 Page Image</strong><code>(Only JPEG)</code></div>
                                                        </div>
                                                        <label class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light uploadModal" data-bs-toggle="modal" data-name="404" data-bs-target="#new-upload-modal">Upload</label>
                                                        <input type="hidden" name="404" value="{{Setting::get('404')}}">
                                                        <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary resetImage mb-75 waves-effect" data-name="404">Reset</button>
                                                    </div>
                                                </div>

                                                <!--/ upload and reset button -->
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">URL Slug (Destination)</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="destination" name="destination" />
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">URL Slug (Activity)</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="activity" name="activity" />
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">URL Slug (Region)</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="region" name="region" />
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">URL Slug (Packages)</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="packages" name="packages" />
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">URL Slug (Pages)</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="pages" name="pages" />
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="">URL Slug (Booking)</label>
                                                <input type="text" id="url-slug-booking" class="form-control" placeholder="booking" name="booking" />
                                            </div>
                                        </div>



                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">Facebook Page</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i data-feather="facebook"></i></span>
                                                    <input type="text" id="first-name-icon" class="form-control" name="facebook" placeholder="https://www.facebook.com/HimalayanLeisure">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">Youtube Page</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i data-feather="youtube"></i></span>
                                                    <input type="text" id="first-name-icon" class="form-control" name="youtube" placeholder="https://www.youtube.com/user/HimalayanLeisure">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">Instagram Page</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i data-feather="instagram"></i></span>
                                                    <input type="text" id="first-name-icon" class="form-control" name="instagram" placeholder="https://instagram.com/HimalayanLeisure">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="last-name-column">Twitter Page</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i data-feather="twitter"></i></span>
                                                    <input type="text" id="first-name-icon" class="form-control" name="twitter" placeholder="https://twitter.com/HLTreks">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="city-column">Email Address</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i data-feather="mail"></i></span>
                                                    <input type="text" id="first-name-icon" class="form-control" name="email" placeholder="info@himalayanleisure.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="country-floating">Phone Number</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i data-feather="phone-call"></i></span>
                                                    <input type="text" id="first-name-icon" class="form-control" name="phone_number" placeholder="+977 98510 94157">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="country-floating">WhatsApp Number</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i data-feather="message-circle"></i></span>
                                                    <input type="text" id="whatsapp-number" class="form-control" name="whatsapp" placeholder="+977 98510 94157">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="company-column">Address</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                                    <input type="text" id="first-name-icon" class="form-control" name="address" placeholder="Thamel, Kathmandu, Nepal (Next to Surya Heritage Hotel)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="google-analytics">Google Analytics ID</label>
                                                <input type="text" id="google-analytics" class="form-control" name="google_analytics" placeholder="289719557" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="google-analytics">Copyright Text</label>
                                                <input type="text" id="footer" class="form-control" name="copyright" placeholder="Copyright: Himalayan Leisure, Inc. All Rights reserved." />
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="d-flex mb-1">

                                                <a href="#" class="me-25">
                                                     <img src="{{asset($icon->file_name ?? 'app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="visa_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                                 </a>

                                                 <!-- upload and reset button -->
                                                 <div class="d-flex align-items-end mt-75 ms-1">
                                                     <div>
                                                         <div class="alert alert-primary" role="alert">
                                                             <div class="alert-body"><strong>Credit Card</strong><code>(Visa)</code></div>
                                                         </div>
                                                         <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="visa" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                         <input type="hidden" name="visa" value="{{Setting::get('visa')}}">
                                                         <button type="button" id="account-reset" class="btn btn-sm resetImage btn-outline-secondary mb-75 waves-effect" data-name="visa">Reset</button>
                                                     </div>
                                                 </div>

                                                 <!--/ upload and reset button -->
                                             </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="d-flex mb-1">

                                                <a href="#" class="me-25">
                                                     <img src="{{asset($icon->file_name ?? 'app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="mastercard_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                                 </a>

                                                 <!-- upload and reset button -->
                                                 <div class="d-flex align-items-end mt-75 ms-1">
                                                     <div>
                                                         <div class="alert alert-primary" role="alert">
                                                             <div class="alert-body"><strong>Credit Card</strong><code>(Mastercard)</code></div>
                                                         </div>
                                                         <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="mastercard" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                         <input type="hidden" name="mastercard" value="{{Setting::get('mastercard')}}">
                                                         <button type="button" id="account-reset" class="btn btn-sm resetImage btn-outline-secondary mb-75 waves-effect" data-name="mastercard">Reset</button>
                                                     </div>
                                                 </div>

                                                 <!--/ upload and reset button -->
                                             </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="d-flex mb-1">

                                                <a href="#" class="me-25">
                                                     <img src="{{asset($icon->file_name ?? 'app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="amex_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                                 </a>

                                                 <!-- upload and reset button -->
                                                 <div class="d-flex align-items-end mt-75 ms-1">
                                                     <div>
                                                         <div class="alert alert-primary" role="alert">
                                                             <div class="alert-body"><strong>Credit Card</strong><code>(AMEX)</code></div>
                                                         </div>
                                                         <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="amex" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                         <input type="hidden" name="amex" value="{{Setting::get('amex')}}">
                                                         <button type="button" id="account-reset" class="btn btn-sm resetImage btn-outline-secondary mb-75 waves-effect" data-name="amex">Reset</button>
                                                     </div>
                                                 </div>

                                                 <!--/ upload and reset button -->
                                             </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="d-flex mb-1">

                                                <a href="#" class="me-25">
                                                     <img src="{{asset($icon->file_name ?? 'app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="union_pay_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                                 </a>

                                                 <!-- upload and reset button -->
                                                 <div class="d-flex align-items-end mt-75 ms-1">
                                                     <div>
                                                         <div class="alert alert-primary" role="alert">
                                                             <div class="alert-body"><strong>Credit Card</strong><code>(Unionpay)</code></div>
                                                         </div>
                                                         <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="union_pay" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                         <input type="hidden" name="union_pay" value="{{Setting::get('union_pay')}}">
                                                         <button type="button" id="account-reset" class="btn btn-sm resetImage btn-outline-secondary mb-75 waves-effect" data-name="union_pay">Reset</button>
                                                     </div>
                                                 </div>

                                                 <!--/ upload and reset button -->
                                             </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="d-flex mb-1">

                                                <a href="#" class="me-25">
                                                     <img src="{{asset($icon->file_name ?? 'app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="paypal_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                                 </a>

                                                 <!-- upload and reset button -->
                                                 <div class="d-flex align-items-end mt-75 ms-1">
                                                     <div>
                                                         <div class="alert alert-primary" role="alert">
                                                             <div class="alert-body"><strong>Credit Card</strong><code>(Paypal)</code></div>
                                                         </div>
                                                         <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="paypal" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                         <input type="hidden" name="paypal" value="{{Setting::get('paypal')}}">
                                                         <button type="button" id="account-reset" class="btn btn-sm resetImage btn-outline-secondary mb-75 waves-effect" data-name="paypal">Reset</button>
                                                     </div>
                                                 </div>

                                                 <!--/ upload and reset button -->
                                             </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="d-flex mb-1">

                                                <a href="#" class="me-25">
                                                     <img src="{{asset($icon->file_name ?? 'app-assets/images/portrait/small/avatar-s-11.jpg')}}" id="stripe_image_output" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                                 </a>

                                                 <!-- upload and reset button -->
                                                 <div class="d-flex align-items-end mt-75 ms-1">
                                                     <div>
                                                         <div class="alert alert-primary" role="alert">
                                                             <div class="alert-body"><strong>Credit Card</strong><code>(Stripe)</code></div>
                                                         </div>
                                                         <label data-bs-toggle="modal" data-bs-target="#new-upload-modal"  data-name="stripe" class="btn btn-sm btn-primary mb-75 me-75 uploadModal waves-effect waves-float waves-light">Upload</label>
                                                         <input type="hidden" name="stripe" value="{{Setting::get('stripe')}}">
                                                         <button type="button" id="account-reset" class="btn btn-sm resetImage btn-outline-secondary mb-75 waves-effect" data-name="stripe">Reset</button>
                                                     </div>
                                                 </div>

                                                 <!--/ upload and reset button -->
                                             </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="cookie">Cookie Message</label>
                                                <input type="text" id="cookie" class="form-control" name="cookie_message" placeholder="We use cookies to enhance your browsing experience, serve personalized ads or content, and analyze our traffic. By clicking Accept All, you consent to our use of cookies." />
                                            </div>
                                        </div>



                                        <div class="col-md-2 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="site_offline">Site Offline?</label>
                                                <div class="form-check form-switch form-check-danger">
                                                    <input type="checkbox" class="form-check-input" name="site_offline" id="site_offline" checked />
                                                    <label class="form-check-label" for="site_offline">
                                                        <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                        <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-10 col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="cookie">Offline Message</label>
                                                <input type="text" id="cookie" class="form-control" name="offline_message" placeholder="We will be back soon. Please contact us at info@himalayanleisure.com if you require any assistance." />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="reset" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Floating Label Form section end -->
        </div>
    </div>
</div>
<!-- END: Content-->

@include('partials.files_modal')

@push('scripts')


<script>


    $('#name').keyup(function(){
      var textParent = $('#name').val();
  var text =  textParent.toLowerCase()
             .replace(/ /g, '-')
             .replace(/[^\w-]+/g, '');

   $('#url').val(text);
})


function loadThumbnailImage(event) {
	var thumbnail_image = document.getElementById('thumbnail_image_output');
	thumbnail_image.src = URL.createObjectURL(event.target.files[0]);
};


function loadBannerImage(event) {
	var banner_image = document.getElementById('banner_image_output');
	banner_image.src = URL.createObjectURL(event.target.files[0]);
};


$('.resetImage').click(function(){
    let imageName = $(this).data('name');
	let thumbnail_image = document.getElementById(imageName+'_image_output');
	thumbnail_image.src = "{{asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}";

});
</script>

@endpush




@endsection


