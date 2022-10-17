@extends('frontend.layouts.app')
@section('content')

<main class="mb-5">
    <div class="main-banner position-relative">
        <img src="./assets/images/about-us-banner.jpg" alt="" />
        <div class="banner-heading justify-content-center">
            <h1>Booking</h1>
        </div>
    </div>
    <div class="tour-modal-inner w-100 m-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="top-nav-modal">
                    <div tab-name="details" class="active">
                        <!-- <i class="fa fa-filter" aria-hidden="true"></i> -->
                        <p class="m-0 ms-2">YOUR DETAILS</p>
                    </div>
                    <div tab-name="further-info">
                        <!-- <i class="fa fa-filter" aria-hidden="true"></i> -->
                        <p class="m-0 ms-2">FURTHER INFORMATION
                        </p>
                    </div>
                    <div tab-name="payment">
                        <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                        <p class="m-0 ms-2">PAYMENT</p>
                    </div>
                    <div tab-name="confirmation">
                        <!-- <i class="fa fa-tag" aria-hidden="true"></i> -->
                        <p class="m-0 ms-2">CONFIRMATION</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-5">
            <div class="row m-0">
                <div class="col-8 p-0 pe-4">
                    <div id="details" class="step-1 active">

                        <div class="tour-modal-body p-4">
                            <h3 class="text-left mb-5 fw-bold">Contact Details</h3>
                            <div class="row">
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">Title</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <select class="form-select" name="" id="">
                                            <option selected>-</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Dr">Dr</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">First name</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">Last Name</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">Email Address</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3 d-block">Phone</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input type="tel" class="form-control phone-field" name="" id="phone"
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">Country of residence</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <select class="form-select" name="" id="">
                                            <option selected>-</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Tibet">Tibet</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3 d-block">Address</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <textarea class="form-control" name="" id="" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-left mb-4 mt-4 fw-bold">Review Your Dates</h3>
                            <div class="dates-review section-border d-flex mb-4">
                                <div
                                    class="d-flex flex-column justify-content-center section-border border-top-0 border-start-0 border-bottom-0 p-4 py-5">
                                    <h3 class="fw-bold">Thursday, June 2nd, 2022</h3>
                                    <h4>to Wednesday, June 15th, 2022</h4>
                                    <a href="#">Change date</a>
                                </div>
                                <div class="d-flex flex-column justify-content-center p-4 py-5">
                                    <div class="d-flex mb-3 align-items-center">
                                        <i class="bi bi-people fs-1 px-3"></i>
                                        <h4 class=" m-0 d-inline-block ms-2"><span class="fw-bold">10+ spaces
                                                left</span> and yours is reserved for the next 10 minutes</h4>
                                    </div>
                                    <div class="d-flex mb-3 align-items-center">
                                        <i class="bi bi-lightning fs-1 px-3"></i>
                                        <h4 class=" m-0 d-inline-block ms-2"><span class="fw-bold">Instant
                                                Book:</span> Your spaces will be instantly secured.</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi fs-5 bi-check-circle text-success"></i>
                                    <p class="fs-5 m-0 d-inline-block ms-2">Best Price guarantees</p>
                                </div>
                                <div>
                                    <i class="bi fs-5 bi-check-circle text-success"></i>
                                    <p class="fs-5 m-0 d-inline-block ms-2">Earn $50 travel credits</p>
                                </div>
                                <div>
                                    <i class="bi fs-5 bi-check-circle text-success"></i>
                                    <p class="fs-5 m-0 d-inline-block ms-2">No booking or credit card fees</p>
                                </div>
                            </div>
                            <h3 class="text-left mb-4 mt-5 fw-bold">Add extras</h3>
                            <div class="dates-review section-border mb-4">
                                <div class="d-flex">
                                    <div
                                        class="d-flex w-75 flex-column justify-content-center section-border border-top-0 border-start-0 p-4 py-4">
                                        <h4 class="fw-bold m-0">Optional extra</h4>
                                    </div>
                                    <div
                                        class="d-flex w-25 flex-column justify-content-center section-border border-top-0 border-start-0 p-4 py-4">
                                        <h4 class="fw-bold m-0">Price</h4>

                                    </div>
                                    <div
                                        class="d-flex w-50 flex-column justify-content-center p-4 py-4 section-border border-top-0 border-start-0 border-end-0">
                                        <h4 class="fw-bold m-0">Number of travellers</h4>

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div
                                        class="d-flex w-75 flex-column justify-content-center section-border border-top-0 border-start-0 border-bottom-0 p-4 py-4">
                                        <h4 class="fw-bold">Sherpa Trekking Porter</h4>
                                        <h4>Sherpa Trekking Porter to carry your luggage during the trek</h4>
                                    </div>
                                    <div
                                        class="d-flex w-25 flex-column justify-content-center section-border border-top-0 border-start-0 border-bottom-0 p-4 py-4">
                                        <h1>+$250</h1>
                                        <small>per traveller</small>
                                        <p>* Local payment</p>
                                    </div>
                                    <div class="d-flex w-50 flex-column justify-content-center p-4 py-4">
                                        <select>
                                            <option>0 travellers</option>
                                            <option>1 travellers</option>
                                            <option>2 travellers</option>
                                            <option>3 travellers</option>
                                            <option>4 travellers</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end px-5 mb-5 py-5">
                                <button class="next-button" onclick="changeTab('further-info', 'details')">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="further-info" class="step-2 ">

                        <div class="tour-modal-body p-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex participants">
                                        <h4 class="fw-bold m-0">Number of travellers</h4>
                                        <div>
                                            <span class="me-3">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </span>
                                            <span>1</span>
                                            <span class="ms-3">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <h3 class="text-left mt-5 mb-3 fw-bold">Add traveller details</h3>
                            <h4 class="text-left mt-4  fw-bold">Lead Booker</h4>
                            <small class="mb-3 d-block">CONTACT</small>

                            <div class="row mb-5">
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">Title</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3 w-50">
                                        <select class="form-select" name="" id="">
                                            <option selected>-</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Dr">Dr</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-6"></div> -->
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">First name</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3 w-50">
                                        <input type="text" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">Last Name</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3 w-50">
                                        <input type="text" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">Email Address</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3 w-50">
                                        <input type="email" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">Phone Number</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3 w-50">
                                        <input type="tel" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">Date of birth</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3 w-50">
                                        <input type="date" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="" class="form-label mb-3 py-3">Country of residence</label>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3 w-50">
                                        <select class="form-select" name="" id="">
                                            <option selected>-</option>
                                            <option value="India">India</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Tibet">Tibet</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label d-block">House number/name</label>
                                        <input type="tel" class="form-control" name="" id="phone"
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label d-block">Street</label>
                                        <input type="tel" class="form-control" name="" id="phone"
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label d-block">Town/City </label>
                                        <input type="tel" class="form-control" name="" id="phone"
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label d-block">County/State </label>
                                        <input type="tel" class="form-control" name="" id="phone"
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label d-block">Postcode/Zip code </label>
                                        <input type="tel" class="form-control" name="" id="phone"
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div> -->
                            </div>
                            <div class="dates-review section-border d-flex mb-4">
                                <div class="d-flex justify-content-between w-100 p-4 py-4">
                                    <div class="d-flex align-items-center py-3">
                                        <i class="bi bi-question-circle  fs-1 px-3"></i>
                                        <div>
                                            <h4>Got a question? Check out our Q&As</h4>
                                            <h5>Or react out to our awarch-winning travel experts</h5>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <button class="back-button">View Q&As</button>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-6"></div> -->
                            <div class="d-flex justify-content-between align-items-center px-5 mb-5 py-5">
                                <button class="back-button" onclick="changeTab('details', 'further-info')">
                                    Back
                                </button>
                                <button class="next-button" onclick="changeTab('payment', 'further-info')">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="payment" class="step-3">

                        <div class="tour-modal-body p-4">
                            <div></div>
                            <div class="row">
                                <div class="col-6 text-end">Order reference :</div>
                                <div class="col-6">232394000020355077</div>
                                <div class="col-6 text-end">Total charge :</div>
                                <div class="col-6">130.00 USD</div>
                                <div class="col-6 text-end">Beneficiary :</div>
                                <div class="col-6">Himalayan Leisure</div>

                            </div>
                            <!-- <div class="row mt-4 " id="payment-form">
                                <div class="col-12 mb-4 text-center">
                                    <p>Please select a payment method by clicking on the logo.</p>
                                    <small class="text-black-50">We accept Visa and Mastercard debit and credit
                                        cards.<br />
                                        If you are paying from the USA you may need to pre-authorise this payment
                                        with
                                        your
                                        bank<br />
                                        as large payments outside the country are sometimes held up by fraud
                                        prevention
                                        algorithms.</small>
                                </div>
                                <div class="col-6 text-end pt-2 mt-2">Visa</div>
                                <div class="col-6 mt-2"><img src="./assets/images/visa-logo.png"
                                        onclick="showpaymentform()" alt="" style="width: 75px;" /></div>
                                <div class="col-6 mt-2 text-end pt-2">Mastercard</div>
                                <div class="col-6 mt-2"><img src="./assets/images/mastercard-logo.png"
                                        onclick="showpaymentform()" alt="" style="width: 75px;" />
                                </div>
                            </div>
                            <div class="row mt-4 d-none" id="payment-form-2">
                                <div class="col-6 text-end mb-3 pt-2">Pay With :</div>
                                <div class="col-6">
                                    <div class="col-6 mb-3"><img src="./assets/images/visa-logo.png" alt=""
                                            style="width: 75px;" /></div>
                                </div>
                                <div class="col-6 text-end mb-3 pt-2">Cardholder's name :</div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control w-50" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-6 text-end mb-3 pt-2">Card number :</div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control w-50" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col-6 text-end mb-3 pt-2">Expiry date (mm/yyyy) :</div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="mb-3">
                                        <select class="form-control" name="" id="">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 mx-2">/</div>
                                    <div class="mb-3">
                                        <select class="form-control" name="" id="">
                                            <option></option>
                                            <option>2022</option>
                                            <option>2023</option>
                                            <option>2024</option>
                                            <option>2025</option>
                                            <option>2026</option>
                                            <option>2027</option>
                                            <option>2028</option>
                                            <option>2029</option>
                                            <option>2030</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 text-end mb-3 pt-2">Card verification code :</div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control w-50" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                            </div> -->
                            <div class="container d-flex justify-content-center mt-5 mb-5">
                                <div class="row g-3">
                                    <div class="col-md-12"> <span>Payment Method</span>
                                        <div class="card">
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                    <div class="dates-review section-border mb-4">
                                                        <div class="d-flex">
                                                            <div
                                                                class="d-flex flex-column w-100 justify-content-center section-border border-top-0 border-start-0 border-end-0 py-2">
                                                                <div class=" p-0">
                                                                    <h2 class="mb-0"> <label for="radio-credit"
                                                                            class="btn btn-outline w-100 btn-block text-left p-3 rounded-0"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapseOne"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <span
                                                                                    class="fw-normal fs-5 d-flex align-items-center"><input
                                                                                        style="height: 18px; width: 18px;"
                                                                                        type="radio" name="payment"
                                                                                        value="credit-card"
                                                                                        class="me-2"
                                                                                        id="radio-credit" />
                                                                                    <!-- <label for="radio-credit"> -->
                                                                                    Credit
                                                                                    card
                                                                                    <!-- </label> -->
                                                                                </span>
                                                                                <div class="icons"> <img
                                                                                        src="https://i.imgur.com/2ISgYja.png"
                                                                                        width="30"> <img
                                                                                        src="https://i.imgur.com/W1vtnOV.png"
                                                                                        width="30"> <img
                                                                                        src="https://i.imgur.com/35tC99g.png"
                                                                                        width="30"> <img
                                                                                        src="https://i.imgur.com/2ISgYja.png"
                                                                                        width="30"> </div>
                                                                            </div>
                                                                        </label> </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div
                                                                class="d-flex flex-column justify-content-center p-4 py-2">
                                                                <div id="collapseOne" class="collapse show"
                                                                    aria-labelledby="headingOne"
                                                                    data-parent="#accordionExample">
                                                                    <div class="card-body payment-card-body p-0">
                                                                        <span
                                                                            class="font-weight-normal card-text">Cardholder
                                                                            Name</span>
                                                                        <div class="input">
                                                                            <i class="fa fa-user"></i>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="i.e. John Smith">
                                                                        </div>
                                                                        <span
                                                                            class="font-weight-normal card-text">Card
                                                                            Number</span>
                                                                        <div class="input"> <i
                                                                                class="fa fa-credit-card"></i>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="0000 0000 0000 0000">
                                                                        </div>
                                                                        <div class="row mt-3 mb-3">
                                                                            <div class="col-md-6"> <span
                                                                                    class="font-weight-normal card-text">Expiry
                                                                                    Date</span>
                                                                                <div class="input"> <i
                                                                                        class="fa fa-calendar"></i>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="MM/YY">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6"> <span
                                                                                    class="font-weight-normal card-text">CVC/CVV</span>
                                                                                <div class="input"> <i
                                                                                        class="fa fa-lock"></i>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="000">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3 mb-3">
                                                                            <div class="col-md-6"> <span
                                                                                    class="font-weight-normal card-text">Country
                                                                                    & Zip Code</span>
                                                                                <div class="input"> <i
                                                                                        class="fa fa-map-marker"></i>
                                                                                    <select
                                                                                        class="ps-4 form-control">
                                                                                        <option disabled selected>
                                                                                            Select
                                                                                            Country
                                                                                        </option>
                                                                                        <option>Country 1</option>
                                                                                        <option>Country 2</option>
                                                                                        <option>Country 3</option>
                                                                                        <option>Country 4</option>
                                                                                        <option>Country 5</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6"> <span
                                                                                    class="font-weight-normal card-text"></span>
                                                                                <div class="input"> <i
                                                                                        class="fa fa-globe"></i>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Zip Code">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="text-muted certificate-text"><i
                                                                                class="fa fa-lock"></i> Your
                                                                            transaction is
                                                                            secured with ssl certificate</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="card mt-2">
                                                    <div class="dates-review section-border mb-4">
                                                        <div class="d-flex">
                                                            <div
                                                                class="d-flex flex-column w-100 justify-content-center section-border border-top-0 border-start-0 border-end-0 py-2">
                                                                <div class=" p-0" id="headingTwo">
                                                                    <h2 class="mb-0"> <label for="radio-paypal"
                                                                            class="btn btn-outline btn-block w-100 text-left collapsed p-3"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseTwo"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseTwo">
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between">
                                                                                <span
                                                                                    class="fw-normal fs-5 d-flex align-items-center"><input
                                                                                        style="height: 18px; width: 18px;"
                                                                                        type="radio" name="payment"
                                                                                        value="paypal" class="me-3"
                                                                                        id="radio-paypal" />Paypal</span>
                                                                                <img src="https://i.imgur.com/7kQEsHU.png"
                                                                                    width="30">
                                                                            </div>
                                                                        </label> </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input type="checkbox" class="form-check-input" name=""
                                                            id="termsCondition" value="checkedValue">
                                                        <label class="form-check-label" for="termsCondition">
                                                            I have read and accept the <span
                                                                class="primarycolor">terms and
                                                                conditions</span>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center px-5 mb-5 py-5">
                                <button class="back-button" onclick="changeTab('further-info', 'payment')">
                                    Back
                                </button>
                                <button class="next-button" onclick="changeTab('confirmation', 'payment')">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="confirmation" class="step-4 ">

                        <div class="tour-modal-body p-4">
                            <!-- <h5 class="mb-3">The total price of your booking is <span
                                    class="primarycolor">$1535.00</span></h5>
                            <p class="mb-3 text-black-50">In order to confirm your booking, we require a deposit
                                of
                                $130.00</p>
                            <p class="mb-3 text-black-50"> Following your payment, you will receive a booking
                                summary by
                                email.
                            </p>
                            <p class="mb-5 text-black-50">Your final balance will be due 60 days before
                                departure.
                            </p>
                            <hr />
                            <h3 class="text-left mt-4 mb-5">TERMS AND CONDITIONS</h3>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" name="" id="termsCondition"
                                    value="checkedValue">
                                <label class="form-check-label" for="termsCondition">
                                    I have read and accept the <span class="primarycolor">terms and
                                        conditions</span>
                                </label>
                            </div>
                            <div class="form-check mb-5">
                                <input type="checkbox" class="form-check-input" name="" id="termsCondition2"
                                    value="checkedValue">
                                <label class="form-check-label" for="termsCondition2">
                                    confirm I am authorised by all other persons, if any, included in this
                                    booking
                                    to
                                    accept
                                    these terms and conditions on their behalf
                                </label>
                            </div> -->
                            <div class="alert alert-success mt-4 mb-5" role="alert">
                                Your booking has been successfully completed. Your booking reference is: XXXXXX. You
                                will receive a confirmation email shortly. If you do not receive the confirmation
                                email then please let us know at: <a
                                    href="mailto:hello@world.com">hello@world.com</a>
                            </div>
                            <div class="dates-review section-border mb-4  p-4 py-5">
                                <h3 class="px-5 mb-4">What are people saying about Himalayan Leisure?</h3>
                                <div class="mt-4">
                                    <div id="testimonials" class="carousel slide px-5" data-bs-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#testimonials" data-bs-slide-to="0" class="active">
                                            </li>
                                            <li data-bs-target="#testimonials" data-bs-slide-to="1"></li>
                                            <li data-bs-target="#testimonials" data-bs-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <p class="fs-5">Informative & cost efficient, not complicated at all
                                                </p>
                                                <p class="fs-5">- Virginia</p>
                                            </div>
                                            <div class="carousel-item">
                                                <p class="fs-5">Informative & cost efficient, not complicated at all
                                                </p>
                                                <p class="fs-5">- Virginia</p>
                                            </div>
                                            <div class="carousel-item">
                                                <p class="fs-5">Informative & cost efficient, not complicated at all
                                                </p>
                                                <p class="fs-5">- Virginia</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3">
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#testimonials" data-bs-slide="prev">
                                                <i class="bi bi-chevron-left"></i>
                                            </button>
                                            <button class="carousel-control-next ms-3" type="button"
                                                data-bs-target="#testimonials" data-bs-slide="next">
                                                <i class="bi bi-chevron-right"></i>
                                            </button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center px-5 mb-5 py-5">
                                <button class="back-button" onclick="changeTab('payment', 'confirmation')">
                                    Back
                                </button>
                                <button class="next-button" onclick="window.location.href = './'">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-0 py-4">
                    <!-- <div class="section-border border-end-0 ps-4 border-bottom-0 border-top-0">
                        <h3 style="margin-top: 20px; ">TRIP SUMMARY</h3>
                        <div class="row">
                            <div class="col-5">
                                <img src="./assets/images/amazing-tours-1.jpg"
                                    style="height: 100px; object-fit: cover;" alt="" class="w-100" />
                            </div>
                            <div class="col-7">
                                <div class="pe-3">
                                    <h4>EVEREST BASE CAMP</h4>
                                    <p>Nepal</p>
                                    <span>TREKKING & HIKING</span>
                                </div>
                            </div>
                            <p class="mt-3 mb-4">Code : NPEB</p>
                        </div>
                        <div class="me-3 pt-4 section-border border-top-0 border-start-0 border-end-0">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h6 class="text-black-50">
                                    Code :
                                </h6>

                                <h6>
                                    NPEB
                                </h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h6 class="text-black-50">
                                    Duration :
                                </h6>

                                <h6>
                                    15-day adventure
                                </h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h6 class="text-black-50">
                                    Difficulty :
                                </h6>

                                <h6>
                                    3/5
                                </h6>
                            </div>
                        </div>
                        <div class="me-3 pt-4 section-border border-top-0 border-start-0 border-end-0">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h6 class="text-black-50">
                                    Arrival
                                </h6>

                                <h6 class="fw-bold">
                                    10th SEPTEMBER 2022
                                </h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h6 class="text-black-50">
                                    Departure
                                </h6>

                                <h6 class="fw-bold">
                                    24th SEPTEMBER 2022
                                </h6>
                            </div>
                        </div>
                        <div class="me-3 pt-4 section-border border-top-0 border-start-0 border-end-0">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h6 class="text-black-50">
                                    Participants
                                </h6>

                                <h6>
                                    x 1
                                </h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h6 class="text-black-50">
                                    Price per person
                                </h6>

                                <h6>
                                    $1595.00
                                </h6>
                            </div>
                        </div>
                        <div class="me-3 pt-4 section-border border-top-0 border-start-0 border-end-0">
                            <div class="d-flex justify-content-between align-items-end py-2">
                                <h6 class="text-black-50">
                                    Total cost
                                </h6>

                                <h5 class="fw-bold">
                                    $1595.00
                                </h5>
                            </div>
                        </div>
                        <div class="me-3 pt-4 mb-5">
                            <div class="d-flex justify-content-between align-items-end py-2">
                                <h6 class="text-black-50">
                                    Deposit
                                </h6>

                                <h6>
                                    $130.00
                                </h6>
                            </div>
                        </div>
                    </div> -->
                        <div class="row">
                            <div class="col-5">
                                <img src="./assets/images/amazing-tours-1.jpg"
                                    style="height: 100px; object-fit: cover;" alt="" class="w-100" />
                            </div>
                            <div class="col-7">
                                <div class="pe-3">
                                    <h4>EVEREST BASE CAMP</h4>
                                    <p>Nepal</p>
                                    <span>TREKKING & HIKING</span>
                                </div>
                            </div>
                            <p class="mt-3 mb-4">Code : NPEB</p>
                        </div>
                    <div class="dates-review section-border mb-4 p-4">
                        <h2 class="mb-4 mt-3">My Trip</h2>
                        <div class="mb-4">
                            <h5>Everest Base Camp Trekking</h5>
                            <h5 class="text-black-50">14 days</h5>
                        </div>
                        <div class="mb-4">
                            <h5>Starts in Kathmandu, Nepal</h5>
                            <h5 class="text-black-50">Thursday, 2 Jun 2022</h5>
                        </div>
                        <div class="mb-4">
                            <h5>Ends in Kathmandu, Nepal</h5>
                            <h5 class="text-black-50">Wednesday, 15 Jun 2022</h5>
                        </div>
                        <div class="mb-4">
                            <h5>Tour Type</h5>
                            <h5 class="text-black-50">Group</h5>
                        </div>
                        <div class="mb-4">
                            <h5>Operated in</h5>
                            <h5 class="text-black-50">English</h5>
                        </div>
                        <div class="mb-3">
                            <h5>What's included</h5>
                            <h5 class="text-black-50">Accomodation, Flights, Guide, Meals, Transport</h5>
                        </div>
                    </div>
                    <div class="dates-review section-border mb-4 p-4">
                        <h2 class="mb-4 mt-3">Price Breakdown</h2>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class=" m-0">
                                Brochure price
                                <small class="d-block text-black-50">$1,199.00 x 1</small>
                            </h5>

                            <h5 class="m-0">
                                $1,199.00
                            </h5>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="">
                                Amount Due
                            </h5>
                            <div class="d-flex align-items-end">
                                <h4 class="me-2">
                                    US
                                </h4>
                                <h3>$1,199.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
