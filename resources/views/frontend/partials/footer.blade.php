<footer class="p-4 py-5">
    @php
    $logo = App\Models\Upload::find(Setting::get('logo'));
    $visa = App\Models\Upload::find(Setting::get('visa'));
$mastercard = App\Models\Upload::find(Setting::get('mastercard'));
$amex = App\Models\Upload::find(Setting::get('amex'));
$union_pay = App\Models\Upload::find(Setting::get('union_pay'));
$paypal = App\Models\Upload::find(Setting::get('paypal'));
$stripe = App\Models\Upload::find(Setting::get('stripe'));
@endphp

        <div class="row mx-2 my-5">
            <div class="col-4">
                <div class="footer-company-info">
                    <div class="footer-logo"> <a href="/">
                <img src="{{asset($logo->file_name??'assets/images/logo.png')}}" alt="" />
            </a></div>
                    <div class="company-info">{{Setting::get('website_description')??''}}</div>
                    <div class="footer-social-icons">
                        <a href="{{Setting::get('facebook') ?? 'javascript:void(0)'}}"><span><i class="fa fa-facebook-f"></i></span></a>
                        <a href="{{Setting::get('instagram') ?? 'javascript:void(0)'}}"><span><i class="fa fa-instagram"></i></span></a>
                        <a href="{{Setting::get('twitter') ?? 'javascript:void(0)'}}"><span><i class="fa fa-twitter"></i></span></a>
                        <a href="{{Setting::get('youtube') ?? 'javascript:void(0)'}}"><span><i class="fa fa-youtube"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="footer-list">
                    <h4>COMPANY</h4>
                    <div>
                        <span></span>
                        <p>About Us</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Places</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Explore</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Blogs</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Career</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Privacy Policy</p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="footer-list">
                    <h4>COMPANY</h4>
                    <div>
                        <span></span>
                        <p>About Us</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Places</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Explore</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Blogs</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Career</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Privacy Policy</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="footer-contact-info">
                    <div class="d-flex align-items-center">
                        <div class="contact-icon me-3">
                            <img src="{{asset('assets/images/phone-icon.png')}}" class="w-100" alt="" />
                        </div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <p class="m-0">{{Setting::get('phone_number')??''}}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="contact-icon me-3">
                            <img src="{{asset('assets/images/mail-icon.png')}}" class="w-100" alt="" />
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p class="m-0">{{Setting::get('email')??''}}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="contact-icon me-3">
                            <img src="{{asset('assets/images/location-icon.png')}}" class="w-100" alt="" />
                        </div>
                        <div class="contact-details">
                            <h4>Location</h4>
                            <p class="m-0">{{Setting::get('address')??''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-section mx-3">
            <div>&copy; {{Setting::get('copyright')??''}}</div>
            <div class="d-flex align-items-center">
                <p class="m-0 me-5">Secure Payments By</p>
                <div class="payment-methods">
                    <img src="{{asset($visa->file_name ?? '')}}" alt="" width="40" />
                    <img src="{{asset($mastercard->file_name ?? '')}}" alt="" width="40" />
                    <img src="{{asset($stripe->file_name ?? '')}}" alt="" width="40" />
                    <img src="{{asset($paypal->file_name ?? '')}}" alt="" width="40" />
                    <img src="{{asset($amex->file_name ?? '')}}" alt="" width="40" />
                    <img src="{{asset($union_pay->file_name ?? '')}}" alt="" width="40" />
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JavaScript Libraries -->

    <script>
        const toggleSideMenu = () => {
            const overlay = document.getElementById('side-menu-overlay')
            const sidemenu = document.getElementById('side-menu')

            overlay.classList.toggle('d-none')
            sidemenu.classList.toggle('active')
        }

        const toggleSearchModal = () => {
            const element = document.getElementById('search-modal')
            element.classList.toggle('d-none')
        }

        const toggleLoginModal = () => {
            const element = document.getElementById('login-modal')
            element.classList.toggle('d-none')
        }
        const dropdownToggle = (e) => {
            e.lastElementChild.classList.toggle('show')
        }

        const toggleInquiryModal = () => {
            const element = document.getElementById('quick-inquiry-modal')
            element.classList.toggle('d-none')
        }

        let loginModalState = true

        const changeLoginTabs = (e) => {
            const loginTabs = document.getElementsByClassName('login-tabs')[0]
            for (let index = 0; index < loginTabs.childElementCount; index++) {
                const element = loginTabs.children[index];
                if (element.classList.contains('active')) {
                    element.classList.remove('active')
                }
            }

            if (!e.classList.contains('active')) {
                e.classList.add('active')
            }

            if (loginModalState) {
                document.getElementById('register').classList.remove('d-none');
               document.getElementById('login').classList.add('d-none');
                loginModalState = false
            } else {

               document.getElementById('register').classList.add('d-none');
               document.getElementById('login').classList.remove('d-none');
                loginModalState = true
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
    <script>
                $('.logout').click(function(){
            $('#logout').submit();
        });
    </script>

    @stack('scripts')
