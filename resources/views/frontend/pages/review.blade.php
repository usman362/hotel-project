@extends('frontend.layouts.app')
@section('content')

<main>
    <div class="main-banner position-relative">
        <img src="./assets/images/about-us-banner.jpg" alt="" />
        <div class="banner-heading justify-content-center">
            <h1>Reviews</h1>
        </div>
    </div>
    <div class="general-section row m-0 p-5 pb-0">
        <div class="col-12 p-0">
            <div class="row m-0 faqs-search ">
                <div class="col-4">
                    <input type="text" placeholder="Search Here...." />
                </div>
                <div class="col-4">
                    <div class="select-dropdown">

                        <button></button>

                        <div class="options">
                            <input id="radio-africa" type="radio" name="region" value="africa" checked>
                            <label style="--index: 1" for="radio-africa">Africa</label>

                            <input id="radio-asia" type="radio" name="region" value="asia">
                            <label style="--index: 2" for="radio-asia">Asia</label>

                            <input id="radio-australia" type="radio" name="region" value="australia">
                            <label style="--index: 3" for="radio-australia">Australia</label>

                            <input id="radio-europe" type="radio" name="region" value="europe">
                            <label style="--index: 4" for="radio-europe">Europe</label>

                            <input id="radio-namerica" type="radio" name="region" value="namerica">
                            <label style="--index: 5" for="radio-namerica">North America</label>

                            <input id="radio-samerica" type="radio" name="region" value="samerica">
                            <label style="--index: 6" for="radio-samerica">South America</label>

                            <input id="radio-antarctica" type="radio" name="region" value="antarctica">
                            <label style="--index: 7" for="radio-antarctica">Antarctica</label>
                        </div>

                        <svg viewBox="0 0 24 24">
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                        </svg>

                    </div>
                </div>
                <div class="col-4">
                    <!-- <div class="select-dropdown">

                        <button></button>

                        <div class="options">
                            <input id="radio-africa" type="radio" name="region-2" value="africa" checked>
                            <label style="--index: 1" for="radio-africa">Africa</label>

                            <input id="radio-asia" type="radio" name="region-2" value="asia">
                            <label style="--index: 2" for="radio-asia">Asia</label>

                            <input id="radio-australia" type="radio" name="region-2" value="australia">
                            <label style="--index: 3" for="radio-australia">Australia</label>

                            <input id="radio-europe" type="radio" name="region-2" value="europe">
                            <label style="--index: 4" for="radio-europe">Europe</label>

                            <input id="radio-namerica" type="radio" name="region-2" value="namerica">
                            <label style="--index: 5" for="radio-namerica">North America</label>

                            <input id="radio-samerica" type="radio" name="region-2" value="samerica">
                            <label style="--index: 6" for="radio-samerica">South America</label>

                            <input id="radio-antarctica" type="radio" name="region-2" value="antarctica">
                            <label style="--index: 7" for="radio-antarctica">Antarctica</label>
                        </div>

                        <svg viewBox="0 0 24 24">
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                        </svg>

                    </div> -->
                <!-- </div> -->
                <!-- <div class="col-2"> -->
                    <button>Search</button>
                </div>
            </div>
        </div>
    </div>

    <div class="general-section p-5">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="sidebar-box bg-white section-border reviews-section-main">
                    <div class="sidebar-box-heading fs-5 d-flex justify-content-between align-items-center">
                        <div class="ps-4">
                            <img src="./assets/images/tour-details-images/review-icon.png"
                                style="height: 25px; margin-right: 15px;                                  "
                                alt="" /> Reviews
                        </div>
                        <div>
                            <span class="primarycolor">Sort :</span>
                            <button class="fw-bold">Rating <i class="fa fa-sort-amount-desc"
                                    aria-hidden="true"></i></button>
                            <button class="fw-bold active">Date <i class="fa fa-sort-amount-desc"
                                    aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="siderbar-box-body reviews-grid">
                        <div class="row m-0 p-5">
                            <div class="col-4">

                                <div class="review-card shadow section-border p-4 py-4">
                                    <div class="review-user-info">
                                        <div>
                                            <img src="./assets/images/tour-details-images/review-avatar.png"
                                                alt="" />
                                            <div class="user-details">
                                                <h5 class="m-0">Kim Niddery</h5>
                                                <div>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>- London</p>
                                    </div>
                                    <small class="d-block my-4">Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company. Excellent communication.
                                        Easy and simple with a great value. I would definitely
                                        use them again!
                                        <br /><br />
                                        Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company.<br /><br />
                                        Excellent communication. Easy and simple with a
                                        great value. I would definitely use them again</small>
                                    <div class="d-flex justify-content-between">
                                        <button>Read more</button>
                                        <div>
                                            <img src="./assets/images/clock-icon.png" alt="" class="me-2" />
                                            <small class="fst-italic">May 5, 2020</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-card shadow section-border p-4 py-4 mt-4">
                                    <div class="review-user-info">
                                        <div>
                                            <img src="./assets/images/tour-details-images/review-avatar.png"
                                                alt="" />
                                            <div class="user-details">
                                                <h5 class="m-0">Kim Niddery</h5>
                                                <div>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>- London</p>
                                    </div>
                                    <small class="d-block my-4">Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company. Excellent communication.</small>
                                    <div class="d-flex justify-content-between">
                                        <button>Read more</button>
                                        <div>
                                            <img src="./assets/images/clock-icon.png" alt="" class="me-2" />
                                            <small class="fst-italic">May 5, 2020</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-card shadow section-border p-4 py-4 mt-4">
                                    <div class="review-user-info">
                                        <div>
                                            <img src="./assets/images/tour-details-images/review-avatar.png"
                                                alt="" />
                                            <div class="user-details">
                                                <h5 class="m-0">Kim Niddery</h5>
                                                <div>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>- London</p>
                                    </div>
                                    <small class="d-block my-4">Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company. Excellent communication.
                                        Easy and simple with a great value. I would definitely
                                        use them again!
                                        <br /><br />
                                        Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company.<br /><br />
                                        Excellent communication. Easy and simple with a
                                        great value. I would definitely use them again</small>
                                    <div class="d-flex justify-content-between">
                                        <button>Read more</button>
                                        <div>
                                            <img src="./assets/images/clock-icon.png" alt="" class="me-2" />
                                            <small class="fst-italic">May 5, 2020</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">

                                <div class="review-card shadow section-border p-4 py-4">
                                    <div class="review-user-info">
                                        <div>
                                            <img src="./assets/images/tour-details-images/review-avatar.png"
                                                alt="" />
                                            <div class="user-details">
                                                <h5 class="m-0">Kim Niddery</h5>
                                                <div>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>- London</p>
                                    </div>
                                    <small class="d-block my-4">Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company. Excellent communication.</small>
                                    <div class="d-flex justify-content-between">
                                        <button>Read more</button>
                                        <div>
                                            <img src="./assets/images/clock-icon.png" alt="" class="me-2" />
                                            <small class="fst-italic">May 5, 2020</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-card shadow section-border p-4 py-4 mt-4">
                                    <div class="review-user-info">
                                        <div>
                                            <img src="./assets/images/tour-details-images/review-avatar.png"
                                                alt="" />
                                            <div class="user-details">
                                                <h5 class="m-0">Kim Niddery</h5>
                                                <div>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>- London</p>
                                    </div>
                                    <small class="d-block my-4">Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company. Excellent communication.
                                        Easy and simple with a great value. I would definitely
                                        use them again!
                                        <br /><br />
                                        Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company.<br /><br />
                                        Excellent communication. Easy and simple with a
                                        great value. I would definitely use them again</small>
                                    <div class="d-flex justify-content-between">
                                        <button>Read more</button>
                                        <div>
                                            <img src="./assets/images/clock-icon.png" alt="" class="me-2" />
                                            <small class="fst-italic">May 5, 2020</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-card shadow section-border p-4 py-4 mt-4">
                                    <div class="review-user-info">
                                        <div>
                                            <img src="./assets/images/tour-details-images/review-avatar.png"
                                                alt="" />
                                            <div class="user-details">
                                                <h5 class="m-0">Kim Niddery</h5>
                                                <div>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>- London</p>
                                    </div>
                                    <small class="d-block my-4">Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company. Excellent communication.</small>
                                    <div class="d-flex justify-content-between">
                                        <button>Read more</button>
                                        <div>
                                            <img src="./assets/images/clock-icon.png" alt="" class="me-2" />
                                            <small class="fst-italic">May 5, 2020</small>
                                        </div>
                                    </div>
                                </div>
                                 <div class="review-card shadow section-border p-4 py-4 mt-4">
                                    <div class="review-user-info">
                                        <div>
                                            <img src="./assets/images/tour-details-images/review-avatar.png"
                                                alt="" />
                                            <div class="user-details">
                                                <h5 class="m-0">Kim Niddery</h5>
                                                <div>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>- London</p>
                                    </div>
                                    <small class="d-block my-4">Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company. Excellent communication.
                                        Easy and simple with a great value. I would definitely
                                        use them again!
                                        <br /><br />
                                        Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company.<br /><br />
                                        Excellent communication. Easy and simple with a
                                        great value. I would definitely use them again</small>
                                    <div class="d-flex justify-content-between">
                                        <button>Read more</button>
                                        <div>
                                            <img src="./assets/images/clock-icon.png" alt="" class="me-2" />
                                            <small class="fst-italic">May 5, 2020</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">

                                <div class="review-card shadow section-border p-4 py-4">
                                    <div class="review-user-info">
                                        <div>
                                            <img src="./assets/images/tour-details-images/review-avatar.png"
                                                alt="" />
                                            <div class="user-details">
                                                <h5 class="m-0">Kim Niddery</h5>
                                                <div>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>- London</p>
                                    </div>
                                    <small class="d-block my-4">Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company. Excellent communication.
                                        Easy and simple with a great value. I would definitely
                                        use them again!
                                        <br /><br />
                                        Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company.<br /><br />
                                        Excellent communication. Easy and simple with a
                                        great value. I would definitely use them again</small>
                                    <div class="d-flex justify-content-between">
                                        <button>Read more</button>
                                        <div>
                                            <img src="./assets/images/clock-icon.png" alt="" class="me-2" />
                                            <small class="fst-italic">May 5, 2020</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-card shadow section-border p-4 py-4 mt-4">
                                    <div class="review-user-info">
                                        <div>
                                            <img src="./assets/images/tour-details-images/review-avatar.png"
                                                alt="" />
                                            <div class="user-details">
                                                <h5 class="m-0">Kim Niddery</h5>
                                                <div>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>- London</p>
                                    </div>
                                    <small class="d-block my-4">Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company. Excellent communication.</small>
                                    <div class="d-flex justify-content-between">
                                        <button>Read more</button>
                                        <div>
                                            <img src="./assets/images/clock-icon.png" alt="" class="me-2" />
                                            <small class="fst-italic">May 5, 2020</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-card shadow section-border p-4 py-4 mt-4">
                                    <div class="review-user-info">
                                        <div>
                                            <img src="./assets/images/tour-details-images/review-avatar.png"
                                                alt="" />
                                            <div class="user-details">
                                                <h5 class="m-0">Kim Niddery</h5>
                                                <div>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                    <i class="fa fa-star primarycolor" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>- London</p>
                                    </div>
                                    <small class="d-block my-4">Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company. Excellent communication.
                                        Easy and simple with a great value. I would definitely
                                        use them again!
                                        <br /><br />
                                        Great company. Excellent communication. Easy and
                                        simple with a great value. I would definitely use them
                                        again!Great company.<br /><br />
                                        Excellent communication. Easy and simple with a
                                        great value. I would definitely use them again</small>
                                    <div class="d-flex justify-content-between">
                                        <button>Read more</button>
                                        <div>
                                            <img src="./assets/images/clock-icon.png" alt="" class="me-2" />
                                            <small class="fst-italic">May 5, 2020</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="pb-5 pt-4 text-center">
                            <button class="load-more-button"><i class="fa fa-spinner" aria-hidden="true"></i> Load
                                More</button>
                        </div> -->
                        <nav class="px-5 pb-3" aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('frontend.partials.reviews')
</main>

@endsection
