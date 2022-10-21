@section('title','Blogs')
@extends('frontend.layouts.app')
@section('content')

<main>
    <div class="main-banner position-relative">
     <img src="{{asset($blog->blog_image->file_name ?? '')}}" alt=""  style="height: 629px;width:100%"/>

        <div class="fw-bolder text-white banner-heading align-items-start justify-content-end ms-5 flex-column">
            <h2>{{$blog->title}}</h2>
            <div class="d-flex align-items-center mb-4">
                <i class="fa fa-calendar primarycolor" aria-hidden="true"></i>
                <!-- <i class="fa fa-calendar-week"></i> -->
                <p class="m-0 ms-3">{{$blog->created_at->format('d M')}}</p>
            </div>
        </div>
    </div>

    <div class="general-section p-5">
        <div class="row m-0">
            <div class="col-9 p-0">
                <div class="me-5 p-4 pb-5 bg-white section-border">
                    <div class="m-0">
                        {!! $blog->content !!}

                    </div>
                    <br />
                    <br />
                    <div class="tags-block d-flex align-items-center">
                        <h4 class="m-0">Tags :</h4>
                      @foreach (json_decode($blog->tags) as $tag)
                        <span>{{$tag}}</span>
                      @endforeach
                    </div>
                    <div class="my-4 blogs-social-icons d-flex align-items-center justify-content-between p-4">
                        <p class="m-0 fw-bold">We Are Social On :</p>
                        <div>
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                    </div>
                    <h3 class="m-0">Comments</h3>
                    <br />
                    <div class="comments-section section-border shadow ">
                        <div class="comment-box p-4 d-flex align-items-start flex-column">
                            <div class="comment-author w-100 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('assets/images/comment-avatar.png')}}" alt="" class="rounded-circle" />
                                    <h5 class="m-0 ms-3">Kim Niddery</h5>
                                </div>
                                <div>
                                    <img src="{{asset('assets/images/clock-icon.png')}}" alt="" class="me-2" />
                                    <small class="fst-italic">May 5, 2020</small>
                                </div>
                            </div>
                            <p class="mt-4 mt-2">
                                Great company. Excellent communication. Easy and simple with a great value. I would
                                definitely use them again!Great
                                company. Excellent communication.Great company. Excellent communication. Easy and
                                simple with a great value. I would
                                definitely use them again!Great company. Excellent communication.
                            </p>
                        </div>

                        <div class="d-flex justify-content-end p-4">
                            <button class="leave-reply-button mt-3 mb-2">Leave a Reply</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 p-0">
                <div class="siderbar">
                    <div class="sidebar-box bg-white section-border mb-5">
                        <div class="sidebar-box-heading fs-5 p-4">SEARCH</div>
                        <div class="siderbar-box-body p-4">
                            <div class="search-input mb-5">
                                <i class="fa fa-search primarycolor fs-4" aria-hidden="true"></i>
                                <input type="text" placeholder="Search Here" />
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box bg-white section-border mb-5">
                        <div class="sidebar-box-heading fs-5 p-4">CATEGORIES</div>
                        <div class="blog-categories siderbar-box-body p-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="fashion" id="fashion">
                                <label class="form-check-label" for="fashion">
                                    Fashion
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="food" id="food">
                                <label class="form-check-label" for="food">
                                    Food
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="gaming" id="gaming">
                                <label class="form-check-label" for="gaming">
                                    Gaming
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="quote" id="quote">
                                <label class="form-check-label" for="quote">
                                    Quote
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="video" id="video">
                                <label class="form-check-label" for="video">
                                    Video
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="sidebar-box bg-white section-border mb-5">
                        <div class="sidebar-box-heading fs-5 p-4">RECENT POST</div>
                        <div class="siderbar-box-body p-4">
                            @foreach ($blogs as $bg)

                            <div class="recent-posts-card d-flex mb-4">
                                <div class="tour-image">
                                    <img src="{{asset($bg->blog_image->file_name ?? '')}}" alt="" />
                                </div>
                                <div class="tour-details p-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fa fa-calendar primarycolor" aria-hidden="true"></i>
                                        <small class="m-0 ms-2">{{$bg->created_at->format('d M')}}</small>
                                    </div>
                                    <h6 class="m-0 pe-3 lh-base">{{$bg->title}}</h6>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="sidebar-box bg-white section-border mb-5">
                        <div class="sidebar-box-heading fs-5 p-4">24/7 Customer Support</div>
                        <div class="siderbar-box-body p-4">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{asset('assets/images/call-icon.png')}}" alt="" />
                                <small class="m-0 ms-2">(01)234-567-8910</small>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{asset('assets/images/mail-icon-small.png')}}" alt="" />
                                <small class="m-0 ms-2">Support@gmail.com</small>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{asset('assets/images/clock-icon.png')}}" alt="" />
                                <small class="m-0 ms-2"><b>08:00am : 05:30 pm</b> (Mon to Sat)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="subscribtion-section p-5">
        <p>Don’t wait any longer. Contact Us</p>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-end">
                <img src="{{asset('assets/images/phone-icon-blue.png')}}" alt="" />
                <h5>+1800-333 578 </h5>
            </div>
            <div class="d-flex  align-items-end">
                <img src="{{asset('assets/images/mail-icon-blue.png')}}" alt="" />
                <h5>info@himalayanleisure.com</h5>
            </div>
            <div class="d-flex  align-items-center">
                <input type="text" />
                <button>SUBSCRIBE</button>
            </div>
        </div>
    </div>
    <div class="reviews-section position-relative">
        <div class="reviews">
            <div class="review">
                <div class="review-image">
                    <img src="{{asset('assets/images/rev-1.jpg')}}" alt="" />
                </div>
                <div class="review-text">
                    <p>"Great things are done when men and mountains are meet"</p>
                    <h5>- Willam Koinas</h5>
                </div>
            </div>
            <div class="review">
                <div class="review-image">
                    <img src="{{asset('assets/images/rev-2.jpg')}}" alt="" />
                </div>
                <div class="review-text">
                    <p>"Great things are done when men and mountains are meet"</p>
                    <h5>- Willam Koinas</h5>
                </div>
            </div>
            <div class="review">
                <div class="review-image">
                    <img src="{{asset('assets/images/rev-3.jpg')}}" alt="" />
                </div>
                <div class="review-text">
                    <p>"Great things are done when men and mountains are meet"</p>
                    <h5>- Willam Koinas</h5>
                </div>
            </div>
        </div>
        <img src="{{asset('assets/images/review-banner.jpg')}}" alt="" class="w-100" />
    </div>
</main>

@endsection
