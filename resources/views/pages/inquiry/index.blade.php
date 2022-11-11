
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-chat.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-chat-list.css')}}">
@endpush
@section('title','Inquiries')

@extends('layouts.app')

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content chat-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper container-xxl p-0">
            <div class="sidebar-left">
                <div class="sidebar">

                    <!-- Chat Sidebar area -->
                    <div class="sidebar-content">
                        <span class="sidebar-close-icon">
                            <i data-feather="x"></i>
                        </span>
                        <!-- Sidebar header start -->
                        <div class="chat-fixed-search">
                            <div class="d-flex align-items-center w-100">

                                <div class="input-group input-group-merge ms-1 w-100">
                                    <span class="input-group-text round"><i data-feather="search" class="text-muted"></i></span>
                                    <input type="text" class="form-control round" id="chat-search" placeholder="Search inquiries" aria-label="Search..." aria-describedby="chat-search" />
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar header end -->

                        <!-- Sidebar Users start -->
                        <div id="users-list" class="chat-user-list-wrapper list-group">
                            <ul class="chat-users-list chat-list media-list">
                              @foreach ($inquiries as $inquiry)

                                <li class="inquiryList" data-id="{{$inquiry->id}}" data-first_name="{{$inquiry->first_name}}" data-last_name="{{$inquiry->last_name}}" data-arrival_date="{{$inquiry->created_at->format('d M Y')}}"
                                data-email="{{$inquiry->email}}" data-phone="{{$inquiry->phone}}" data-subject="{{$inquiry->subject}}" data-message="{{$inquiry->message}}">
                                    <span class="avatar"><img src="{{asset('app-assets/images/avatars/avatar.png')}}" height="42" width="42" alt="Generic placeholder image" />
                                    </span>
                                    <div class="chat-info flex-grow-1">
                                        <h5 class="mb-0">{{$inquiry->first_name}} {{$inquiry->last_name}}</h5>
                                        <p class="card-text text-truncate">
                                            {{$inquiry->subject}}
                                        </p>
                                    </div>
                                    <div class="chat-meta text-nowrap">
                                        <small class="float-end mb-25 chat-time">{{$inquiry->created_at->format('d M Y')}}</small>
                                    </div>
                                </li>

                                @endforeach
                                <li class="no-results">
                                    <h6 class="mb-0">No Chats Found</h6>
                                </li>
                            </ul>

                        </div>
                        <!-- Sidebar Users end -->
                    </div>
                    <!--/ Chat Sidebar area -->

                </div>
            </div>
            <div class="content-right">
                <div class="content-wrapper container-xxl p-0">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="body-content-overlay"></div>
                        <!-- Main chat area -->
                        <section class="chat-app-window">
                            <!-- To load Conversation -->
                            <div class="start-chat-area">
                                <div class="mb-1 start-chat-icon">
                                    <i data-feather="message-square"></i>
                                </div>
                                <h4 class="start-chat-text">Inquiries</h4>
                            </div>
                            <!--/ To load Conversation -->

                            <!-- Active Chat -->
                            <div class="active-chat d-none">
                                <!-- Chat Header -->
                                <div class="chat-navbar">
                                    <header class="chat-header">
                                        <div class="d-flex align-items-center">
                                            <div class="sidebar-toggle d-block d-lg-none me-1">
                                                <i data-feather="menu" class="font-medium-5"></i>
                                            </div>

                                            <h6 class="mb-0">Quick Inquiry</h6>
                                        </div>
                                        <div class="d-flex align-items-center">

                                            <i data-feather="trash" class="cursor-pointer d-sm-block d-none font-medium-2 me-1" ></i>


                                        </div>
                                    </header>
                                </div>
                                <!--/ Chat Header -->

                                <!-- User Chat messages -->


                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header email-detail-head">
                                                <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                                    <div class="avatar me-75">
                                                        <img src="{{asset('app-assets/images/avatars/avatar.png')}}" alt="avatar img holder" width="48" height="48" />
                                                    </div>
                                                    <div class="mail-items">
                                                        <h5 class="mb-0 full_name">Carlos Williamson</h5>
                                                        <div class="email-info-dropup">
                                                            <span role="button" class="dropdown-toggle font-small-3 text-muted email" id="card_top01" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                carlos@gmail.com
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mail-meta-item d-flex align-items-center">
                                                    <small class="mail-date-time text-muted arrival_date">29 Aug, 2020</small>

                                                </div>
                                            </div>
                                            <div class="card-body mail-message-wrapper pt-2">
                                                <dl class="row">
                                                    <dt class="col-sm-4">Full Name</dt>
                                                    <dd class="col-sm-8 full_name">Sample Name</dd>
                                                </dl>
                                                <dl class="row">
                                                    <dt class="col-sm-4">Email Address</dt>
                                                    <dd class="col-sm-8 email">test@test.com</dd>
                                                </dl>
                                                <dl class="row">
                                                    <dt class="col-sm-4">Mobile No</dt>
                                                    <dd class="col-sm-8 phone">+977 98510 99456</dd>
                                                </dl>
                                                <dl class="row">
                                                    <dt class="col-sm-4">Date of Arrival</dt>
                                                    <dd class="col-sm-8 arrival_date">22 Oct, 2022</dd>
                                                </dl>
                                                <dl class="row">
                                                    <dt class="col-sm-4">Tour Name</dt>
                                                    <dd class="col-sm-8 subject">Sample Tour Name</dd>
                                                </dl>
                                                <dl class="row">
                                                    <dt class="col-sm-4">Message</dt>
                                                    <dd class="col-sm-8 message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- User Chat messages -->

                                <!-- Submit Chat form -->

                                <!--/ Submit Chat form -->
                            </div>
                            <!--/ Active Chat -->
                        </section>
                        <!--/ Main chat area -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->



@endsection

@push('scripts')
<script src="{{asset('app-assets/js/scripts/pages/app-chat.js')}}"></script>
<script>
$('.inquiryList').click(function(){
    let id = $(this).data('id');
    let first_name = $(this).data('first_name');
    let last_name = $(this).data('last_name');
    let phone = $(this).data('phone');
    let subject = $(this).data('subject');
    let email = $(this).data('email');
    let arrival_date = $(this).data('arrival_date');
    let message = $(this).data('message');
    $('.full_name').text(first_name+' '+last_name);
    $('.phone').text(phone);
    $('.id').text(id);
    $('.subject').text(subject);
    $('.email').text(email);
    $('.arrival_date').text(arrival_date);
    $('.message').text(message);
});

</script>
@endpush

