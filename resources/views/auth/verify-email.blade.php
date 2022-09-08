<!--<x-auth-layout>-->
    <!--begin::Verify Email Form-->
<!--    <div class="w-100">-->

        <!--begin::Heading-->
<!--        <div class="text-center mb-10">-->
            <!--begin::Title-->
<!--            <h1 class="text-dark mb-3">-->
<!--                {{ __('Verify Email') }}-->
<!--            </h1>-->
            <!--end::Title-->

            <!--begin::Link-->
<!--            <div class="text-gray-400 fw-bold fs-4">-->
<!--                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}-->
<!--            </div>-->
            <!--::Link-->

            <!--begin::Session Status-->
<!--            @if (session('status') === 'verification-link-sent')-->
<!--                <p class="font-medium text-sm text-gray-500 mt-4">-->
<!--                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}-->
<!--                </p>-->
<!--            @endif-->
            <!--end::Session Status-->
<!--        </div>-->
        <!--begin::Heading-->

        <!--begin::Actions-->
<!--        <div class="d-flex flex-wrap justify-content-center pb-lg-0">-->

<!--            <form method="POST" action="{{ theme()->getPageUrl('verification.send') }}">-->
<!--                @csrf-->
<!--                <button type="submit" class="btn btn-lg btn-primary fw-bolder me-4">{{ __('Resend Verification Email') }}</button>-->
<!--            </form>-->

<!--            <form method="POST" action="{{ theme()->getPageUrl('logout') }}">-->
<!--                @csrf-->
<!--                <button type="submit" class="btn btn-lg btn-light-primary fw-bolder me-4">{{ __('Log out') }}</button>-->
<!--            </form>-->
<!--        </div>-->
        <!--end::Actions-->
<!--    </div>-->

    <!--end::Verify Email Form-->
<!--</x-auth-layout>-->


@extends('auth.layout')
@section('title','Verify Email Address')
@section('content')

<div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo" href="index.html">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
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
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h2 class="brand-text text-primary ms-1">Vuexy</h2>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{asset('app-assets/images/illustration/verify-email-illustration.svg')}}" alt="two steps verification" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- verify email v2-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bolder mb-1">Verify your email &#x2709;&#xFE0F;</h2>
                                <p class="card-text mb-2">Account activation link sent to your email address<br><span class="fw-bolder"></span><br>
                                    Please follow instructions in the email to continue.</p>
                                    <form method="POST" action="{{ theme()->getPageUrl('logout') }}">
                                         @csrf
                                    
                                     <button type="submit" class="btn btn-primary w-100" >Verify later</button>
                                        
                                    </form>
                                    
                                    
            <form method="POST" action="{{ theme()->getPageUrl('verification.send') }}" id="resend-form">
                                         @csrf
                                         
                                         </form>
                                    
                                <p class="text-center mt-2"><span>Didn&apos;t receive an email?</span><a href="Javascript:void(0)" onclick="$('#resend-form').submit()"><span>&nbsp;Resend</span></a></p>
                            </div>
                        </div>
                        <!-- verify email-->
                    </div>

@endsection


