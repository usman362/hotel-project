@extends('frontend.layouts.app')
@section('content')

<main>
    <div class="main-banner position-relative">
        <img src="./assets/images/contact-banner.jpg" alt="" />
        <div class="banner-heading">
            <h1>Contact Us</h1>
        </div>
    </div>


    <div class="contact-section  my-5 mx-4">
        <div class="row m-0">
            <div class="col-4">
                <div class="contact-detail py-5">
                    <h2>Contact Details</h2>
                    <p>Get in touch with us for any questions about our projects.</p>
                    <div class="d-flex align-items-center mt-5">
                        <div class="contact-icon me-4 ms-2" style="width:40px">
                            <img src="./assets/images/contact-1.png" class="w-100" alt="" />
                        </div>
                        <div class="contact-details">
                            <h4>Head Office</h4>
                            <p class="m-0">2035 Sunset Lake Rd Suite B-2,<br />Newark,New Castle, DE-19702</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-5">
                        <div class="contact-icon me-4 ms-2" style="width:40px">
                            <img src="./assets/images/contact-2.png" class="w-100" alt="" />
                        </div>
                        <div class="contact-details">
                            <h4>Email Us</h4>
                            <p class="m-0">Info@himalayanleisure.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-5">
                        <div class="contact-icon me-4 ms-2" style="width:40px">
                            <img src="./assets/images/contact-3.png" class="w-100" alt="" />
                        </div>
                        <div class="contact-details">
                            <h4>Call Support</h4>
                            <p class="m-0">+977 98510 94157</p>
                        </div>
                    </div>

                    <div class="contact-social-icons mt-5">
                        <span><i class="fa fa-facebook-f"></i></span>
                        <span><i class="fa fa-instagram"></i></span>
                        <span><i class="fa fa-twitter"></i></span>
                        <span><i class="fa fa-linkedin"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="ms-5">
                    <h2>Send a Message</h2>
                    @if (session('message'))

                    <div class="alert alert-success mt-2">{{session('message')}}</div>

                    @endif
                    <form class="contact-form" action="{{route('contact.store')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="First Name" name="first_name"/>
                        <input type="text" placeholder="Last Name" name="last_name"/>
                        <input type="email" placeholder="Email" name="email"/>
                        <input type="tel" placeholder="Phone" name="phone"/>
                        {{-- <select class="form-control">
                            <option>Company</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                        </select> --}}
                        <input type="text" placeholder="Subject" name="subject"/>
                        <textarea class="w-100 mt-5" rows="7" placeholder="Message" name="message"></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <div class="get-started-section mt-5">
        <h1>Your Trusted Travel Partner</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br />incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim</p>
        <button onclick="toggleInquiryModal()">GET STARTED NOW</button>
    </div>
    <div class="reviews-section position-relative">
        <div class="reviews">
            <div class="review">
                <div class="review-image">
                    <img src="./assets/images/rev-1.jpg" alt="" />
                </div>
                <div class="review-text">
                    <p>"Great things are done when men and mountains are meet"</p>
                    <h5>- Willam Koinas</h5>
                </div>
            </div>
            <div class="review">
                <div class="review-image">
                    <img src="./assets/images/rev-2.jpg" alt="" />
                </div>
                <div class="review-text">
                    <p>"Great things are done when men and mountains are meet"</p>
                    <h5>- Willam Koinas</h5>
                </div>
            </div>
            <div class="review">
                <div class="review-image">
                    <img src="./assets/images/rev-3.jpg" alt="" />
                </div>
                <div class="review-text">
                    <p>"Great things are done when men and mountains are meet"</p>
                    <h5>- Willam Koinas</h5>
                </div>
            </div>
        </div>
        <img src="./assets/images/review-banner.jpg" alt="" class="w-100" />
    </div>
</main>

@endsection
