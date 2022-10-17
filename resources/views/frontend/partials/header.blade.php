 <header class="d-flex">
        <div class="logo">
            <a href="/">
                <img src="{{asset('assets/images/logo.png')}}" alt="" />
            </a>
        </div>
        <div class="nav-area">
            <div class="top-nav d-flex">
                <div class="top-bar d-flex justify-content-between">
                    <div class="top-details d-flex">
                        <div class="top-phone d-flex  align-items-center px-4">
                            <i class="fa fa-phone"></i>
                            <p>+123 12345 12355</p>
                        </div>
                        <div class="top-mail d-flex align-items-center px-4">
                            <i class="fa fa-envelope"></i>
                            <p>+123 12345 12355</p>
                        </div>
                    </div>
                    <div class="top-social-icons me-5">
                        <i class="fa fa-facebook-f"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-linkedin"></i>
                    </div>
                </div>
                <div class="top-bar-dropdown d-flex">
                    <div class="dropdown" onmouseenter="dropdownToggle(this)" onmouseleave="dropdownToggle(this)">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="currencyDropdown">
                            EUR
                        </button>
                        <ul class="dropdown-menu currency-dropdown" aria-labelledby="currencyDropdown">
                            <li><a class="dropdown-item" href="#">USD <div></div></a></li>
                            <li><a class="dropdown-item" href="#">AUD <div></div></a></li>
                            <li><a class="dropdown-item" href="#">GBP <div></div></a></li>
                        </ul>
                    </div>
                    <div class="login-icon">
                        <i class="fa fa-user-circle" onclick="toggleLoginModal()"></i>
                        <div class="login-modal d-none" id="login-modal">
                            <i class="bi bi-x-lg" onclick="toggleLoginModal()" aria-hidden="true"></i>
                            <div class="login-modal-inner">
                                <div class="login-tabs">
                                    <div onclick="changeLoginTabs(this)" class="active">LOGIN</div>
                                    <div onclick="changeLoginTabs(this)">REGISTER</div>
                                </div>
                                <div class="p-4 pb-3" style="background-color: #f37050;">
                                    <!-- <h2>Sign In Here!</h2>
                                    <p class="mb-4">Log into your account in just a few simple steps.</p> -->
                                    <div id="fname" class="login-field mb-3 d-none">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="text" placeholder="Full Name" />
                                    </div>
                                    <div id="uname" class="login-field mb-3">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="text" placeholder="User Name" />
                                    </div>
                                    <div id="email" class="login-field mb-3 d-none">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="email" placeholder="Email Address" />
                                    </div>
                                    <div id="country" class="login-field mb-3 d-none">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="text" placeholder="Country" />
                                    </div>
                                    <div class="login-field mb-3">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <input type="password" placeholder="Password" />
                                    </div>
                                    <div id="cpassword" class="login-field mb-3 d-none">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <input type="password" placeholder="Confirm Password" />
                                    </div>
                                    <div class="mb-3" id="remember-radio">
                                        <input type="radio" value="remember" name="remeber" /><label for="remember"
                                            class="ms-3">Remember
                                            me</label>
                                    </div>
                                    <a href="#" id="lost-password"
                                        class="mb-3 d-inline-block text-decoration-none text-white">Lost Your
                                        Password</a>
                                    <button class="login-button mb-3" id="sign-in">SIGN IN</button>
                                    <button class="login-button mb-3 d-none" id="sign-up">SIGN UP</button>
                                    <p class="mb-0">Sign in with Facebook or Google+</p>
                                </div>
                                <div class="social-login">
                                    <div>FACEBOOK</div>
                                    <div>GOOGLE+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="top-nav-bar d-flex">
                    <!-- <div class="top-nav-item"><a href="./index.html">Home</a></div> -->
                    <div class="top-nav-item">
                        <div class="dropdown" onmouseenter="dropdownToggle(this)" onmouseleave="dropdownToggle(this)">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="navMenuButton1">
                                Destinations
                            </button>
                            <!-- <ul >
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul> -->
                            <div class="dropdown-menu mega-menu" aria-labelledby="navMenuButton1">
                                <div class="side-menu-tabs">
                                    <div class="row h-100 m-0">
                                        <div class="col-12 h-100 p-0">
                                            <div class="h-100 section-border">
                                                <div class="row m-0 h-100">
                                                    <div class="col-3 p-0">

                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs flex-column h-100" id="myTab"
                                                            flex-column role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link active" id="everest-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#everest"
                                                                    type="button" role="tab" aria-controls="everest"
                                                                    aria-selected="true"><i class="fas fa-hiking"></i>
                                                                    Everest</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="nepal-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#nepal"
                                                                    type="button" role="tab" aria-controls="nepal"
                                                                    aria-selected="false"><i
                                                                        class="fas fa-hiking"></i>Nepal</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="bhutan-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#bhutan"
                                                                    type="button" role="tab" aria-controls="bhutan"
                                                                    aria-selected="false"><i
                                                                        class="fas fa-hiking"></i>Bhutan</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="tibet-tab"
                                                                    data-bs-toggle="tab" data-bs-target="#tibet"
                                                                    type="button" role="tab" aria-controls="tibet"
                                                                    aria-selected="false"><i
                                                                        class="fas fa-hiking"></i>Tibet</button>
                                                            </li>
                                                        </ul>

                                                        <!-- Tab panes -->
                                                    </div>
                                                    <div class="col-9 p-0">
                                                        <div class="tab-content h-100">
                                                            <div class="tab-pane active" id="everest" role="tabpanel"
                                                                aria-labelledby="everest-tab">
                                                                <button class="fw-bold mb-4 trip-button"><span>Plan Your
                                                                        Trip To Everest</span> <i
                                                                        class="bi bi-arrow-right"></i></button>
                                                                <div class="row">
                                                                    <div class="col-6 p-0">
                                                                        <div class="p-4">
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Weather in Everest
                                                                                        Region</a></li>
                                                                                <li><a href="#">Weather in January</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in February</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in March</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in April</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in May</a></li>
                                                                                <li><a href="#">Weather in June</a></li>
                                                                                <li><a href="#">Weather in July</a></li>
                                                                                <li><a href="#">Weather in August</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in September</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in October</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in November</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in December</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-6 p-0 section-border border-bottom-0 border-top-0 border-end-0">
                                                                        <div class="p-4">
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Altitude Sickness : What
                                                                                        is
                                                                                        it and how
                                                                                        to avoid it</a></li>
                                                                                <li><a href="#">Information of Altitude
                                                                                        Variation </a></li>
                                                                            </ul>

                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Everest Base camp Trek
                                                                                        Cost</a></li>
                                                                                <li><a href="#">Accommodation Cost</a>
                                                                                </li>
                                                                                <li><a href="#">Permits for the Trek
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Highlights of Everest
                                                                                        Base
                                                                                        Camp Trek
                                                                                    </a></li>
                                                                                <li><a href="#">Airport and Flights </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="nepal" role="tabpanel"
                                                                aria-labelledby="nepal-tab">
                                                                <button class="fw-bold mb-4 trip-button"><span>Plan Your
                                                                        Trip To Nepal</span> <i
                                                                        class="bi bi-arrow-right"></i></button>
                                                                <div class="row">
                                                                    <div class="col-6 p-0">
                                                                        <div class="p-4">
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Weather in Nepal
                                                                                        Region</a></li>
                                                                                <li><a href="#">Weather in January</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in February</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in March</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in April</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in May</a></li>
                                                                                <li><a href="#">Weather in June</a></li>
                                                                                <li><a href="#">Weather in July</a></li>
                                                                                <li><a href="#">Weather in August</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in September</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in October</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in November</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in December</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-6 p-0 section-border border-bottom-0 border-top-0 border-end-0">
                                                                        <div class="p-4">
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Altitude Sickness : What
                                                                                        is
                                                                                        it and how
                                                                                        to avoid it</a></li>
                                                                                <li><a href="#">Information of Altitude
                                                                                        Variation </a></li>
                                                                            </ul>

                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Everest Base camp Trek
                                                                                        Cost</a></li>
                                                                                <li><a href="#">Accommodation Cost</a>
                                                                                </li>
                                                                                <li><a href="#">Permits for the Trek
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Highlights of Everest
                                                                                        Base
                                                                                        Camp Trek
                                                                                    </a></li>
                                                                                <li><a href="#">Airport and Flights </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="bhutan" role="tabpanel"
                                                                aria-labelledby="bhutan-tab">
                                                                <button class="fw-bold mb-4 trip-button"><span>Plan Your
                                                                        Trip To Bhutan</span> <i
                                                                        class="bi bi-arrow-right"></i></button>
                                                                <div class="row">
                                                                    <div class="col-6 p-0">
                                                                        <div class="p-4">
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Weather in Bhutan
                                                                                        Region</a></li>
                                                                                <li><a href="#">Weather in January</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in February</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in March</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in April</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in May</a></li>
                                                                                <li><a href="#">Weather in June</a></li>
                                                                                <li><a href="#">Weather in July</a></li>
                                                                                <li><a href="#">Weather in August</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in September</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in October</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in November</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in December</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-6 p-0 section-border border-bottom-0 border-top-0 border-end-0">
                                                                        <div class="p-4">
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Altitude Sickness : What
                                                                                        is
                                                                                        it and how
                                                                                        to avoid it</a></li>
                                                                                <li><a href="#">Information of Altitude
                                                                                        Variation </a></li>
                                                                            </ul>

                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Everest Base camp Trek
                                                                                        Cost</a></li>
                                                                                <li><a href="#">Accommodation Cost</a>
                                                                                </li>
                                                                                <li><a href="#">Permits for the Trek
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Highlights of Everest
                                                                                        Base
                                                                                        Camp Trek
                                                                                    </a></li>
                                                                                <li><a href="#">Airport and Flights </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tibet" role="tabpanel"
                                                                aria-labelledby="tibet-tab">
                                                                <button class="fw-bold mb-4 trip-button"><span>Plan Your
                                                                        Trip To Tibet</span> <i
                                                                        class="bi bi-arrow-right"></i></button>
                                                                <div class="row">
                                                                    <div class="col-6 p-0">
                                                                        <div class="p-4">
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Weather in Tibet
                                                                                        Region</a></li>
                                                                                <li><a href="#">Weather in January</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in February</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in March</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in April</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in May</a></li>
                                                                                <li><a href="#">Weather in June</a></li>
                                                                                <li><a href="#">Weather in July</a></li>
                                                                                <li><a href="#">Weather in August</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in September</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in October</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in November</a>
                                                                                </li>
                                                                                <li><a href="#">Weather in December</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-6 p-0 section-border border-bottom-0 border-top-0 border-end-0">
                                                                        <div class="p-4">
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Altitude Sickness : What
                                                                                        is
                                                                                        it and how
                                                                                        to avoid it</a></li>
                                                                                <li><a href="#">Information of Altitude
                                                                                        Variation </a></li>
                                                                            </ul>

                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Everest Base camp Trek
                                                                                        Cost</a></li>
                                                                                <li><a href="#">Accommodation Cost</a>
                                                                                </li>
                                                                                <li><a href="#">Permits for the Trek
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                            <h4 class="fw-bold mb-3">Best Time To Go
                                                                            </h4>
                                                                            <ul class="mb-5">
                                                                                <li><a href="#">Highlights of Everest
                                                                                        Base
                                                                                        Camp Trek
                                                                                    </a></li>
                                                                                <li><a href="#">Airport and Flights </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-nav-item">
                        <div class="dropdown" onmouseenter="dropdownToggle(this)" onmouseleave="dropdownToggle(this)">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="navMenuButton1">
                                Nepal
                            </button>
                            <!-- <ul >
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul> -->
                            <div class="dropdown-menu mega-drop" aria-labelledby="navMenuButton1">
                                <div class="p-4 d-flex align-items-start justify-content-between">
                                    <div>
                                        <h5>COMPANY RELATED</h5>
                                        <p><a href="#">About Us</a></p>
                                        <p><a href="#">Services</a></p>
                                        <p><a href="#">Financial Security</a></p>
                                        <p><a href="#">Partner With Us</a></p>
                                    </div>
                                    <div>
                                        <h5>GENERAL QUERIES</h5>
                                        <p><a href="#">Destination Guide</a></p>
                                        <p><a href="#">TripAdvisor Reviews</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-nav-item">
                        <div class="dropdown" onmouseenter="dropdownToggle(this)" onmouseleave="dropdownToggle(this)">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="navMenuButton2">
                                Tibet
                            </button>
                            <div class="dropdown-menu mega-drop" aria-labelledby="navMenuButton1">
                                <div class="p-4 d-flex align-items-start justify-content-between">
                                    <div>
                                        <h5>COMPANY RELATED</h5>
                                        <p><a href="#">About Us</a></p>
                                        <p><a href="#">Services</a></p>
                                        <p><a href="#">Financial Security</a></p>
                                        <p><a href="#">Partner With Us</a></p>
                                    </div>
                                    <div>
                                        <h5>GENERAL QUERIES</h5>
                                        <p><a href="#">Destination Guide</a></p>
                                        <p><a href="#">TripAdvisor Reviews</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-nav-item">
                        <div class="dropdown" onmouseenter="dropdownToggle(this)" onmouseleave="dropdownToggle(this)">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="navMenuButton3">
                                Bhutan
                            </button>
                            <div class="dropdown-menu mega-drop" aria-labelledby="navMenuButton1">
                                <div class="p-4 d-flex align-items-start justify-content-between">
                                    <div>
                                        <h5>COMPANY RELATED</h5>
                                        <p><a href="#">About Us</a></p>
                                        <p><a href="#">Services</a></p>
                                        <p><a href="#">Financial Security</a></p>
                                        <p><a href="#">Partner With Us</a></p>
                                    </div>
                                    <div>
                                        <h5>GENERAL QUERIES</h5>
                                        <p><a href="#">Destination Guide</a></p>
                                        <p><a href="#">TripAdvisor Reviews</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-nav-item"><a href="{{route('faqs')}}">Support</a></div>
                    <div class="top-nav-item"><a href="{{route('blogs')}}">Blog</a></div>
                    <div class="top-nav-item"><a href="{{route('contact')}}">Contact</a></div>

                </div>
                <div class="d-flex">
                    <div class="side-menu-button fs-4 me-4">
                        <button><i class="bi bi-link-45deg"></i> ABC Treks</button>
                    </div>
                    <div class="side-menu-button fs-4 me-4">
                        <i class="fa fa-search" aria-hidden="true" onclick="toggleSearchModal()"></i>
                        <!-- <div class="search-modal-overlay"></div> -->
                        <div class="search-modal d-none" id="search-modal">
                            <i class="bi bi-x-lg" onclick="toggleSearchModal()" aria-hidden="true"></i>
                            <div>
                                <input type="text" placeholder="Search..." />
                                <button class="fw-bold"><a href="./search.html">Find Now</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="side-menu-button fs-2 me-5">
                        <!-- <i class="fa fa-bars" onclick="toggleSideMenu()" aria-hidden="true"></i> -->
                        <span class="side-menu-icon" onclick="toggleSideMenu()">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19px" height="30px"
                                viewBox="0 0 26 20" enable-background="new 0 0 26 20" xml:space="preserve">
                                <rect x="10.5" width="16.7" height="3"></rect>
                                <rect x="8" y="10.8" width="19.2" height="3"></rect>
                                <rect x="1.7" y="22.6" width="25.5" height="3"></rect>
                            </svg>
                        </span>

                        <div class="side-menu-overlay d-none" onclick="toggleSideMenu()" id="side-menu-overlay">
                        </div>

                        <div class="side-menu" id="side-menu">
                            <div class="text-end px-2">
                                <i class="bi bi-x" onclick="toggleSideMenu()" aria-hidden="true"></i>
                            </div>

                            <div class="d-flex flex-column h-100 p-5 justify-content-around">
                                <div class="text-center">
                                    <span class="py-4 d-inline-block mb-4" style="background-color: #f37050;">
                                         <a href="/">
                <img src="{{('assets/images/logo.png')}}" alt="" />
            </a>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipis cing elit. Aenean commodo
                                        ligula eget dolor. Aenean massa. Cum sociis theme natoque. Cum sociis</p>
                                </div>
                                <div>
                                    <div class="side-menu-search mb-5">
                                        <h4 class="text-center mb-3">Find Your Destination</h4>
                                        <div>
                                            <input type="text" placeholder="Search..." />
                                            <button class="fw-bold"><a href="./search.html"><i
                                                        class="bi bi-search"></i></a></button>
                                        </div>
                                    </div>
                                    <div class="side-menu-social">
                                        <h4 class="text-center mb-3">Follow ME</h4>
                                        <div class="text-center">
                                            <span>
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </span>
                                            <span>
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </span>
                                            <span>
                                                <i class="fa fa-facebook-f" aria-hidden="true"></i>
                                            </span>
                                            <span>
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <ul>
                                <li>Home</li>
                                <li>About</li>
                                <li>Contact</li>
                                <li>FAQs</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
