<footer class="p-4 py-5">
        <div class="row mx-2 my-5">
            <div class="col-4">
                <div class="footer-company-info">
                    <div class="footer-logo"> <a href="/">
                <img src="{{asset('assets/images/logo.png')}}" alt="" />
            </a></div>
                    <div class="company-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt</div>
                    <div class="footer-social-icons">
                        <span><i class="fa fa-facebook-f"></i></span>
                        <span><i class="fa fa-instagram"></i></span>
                        <span><i class="fa fa-twitter"></i></span>
                        <span><i class="fa fa-linkedin"></i></span>
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
                            <p class="m-0">+977 98510 94157</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="contact-icon me-3">
                            <img src="{{asset('assets/images/mail-icon.png')}}" class="w-100" alt="" />
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p class="m-0">Info@himalayanleisure.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="contact-icon me-3">
                            <img src="{{asset('assets/images/location-icon.png')}}" class="w-100" alt="" />
                        </div>
                        <div class="contact-details">
                            <h4>Location</h4>
                            <p class="m-0">2035 Sunset Lake Rd Suite B-2,<br />Newark,New Castle, DE-19702</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-section mx-3">
            <div>&copy; 2021 Himalayan Leisure Inc</div>
            <div class="d-flex align-items-center">
                <p class="m-0 me-5">Secure Payments By</p>
                <div class="payment-methods">
                    <img src="{{asset('assets/images/visa-img.jpg')}}" alt="" />
                    <img src="{{asset('assets/images/mastercard-img.jpg')}}" alt="" />
                    <img src="{{asset('assets/images/american-express-img.jpg')}}" alt="" />
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
                document.getElementById('cpassword').classList.remove('d-none')
                document.getElementById('remember-radio').classList.add('d-none')
                document.getElementById('lost-password').classList.add('d-none')
                document.getElementById('sign-in').classList.add('d-none')
                document.getElementById('sign-up').classList.remove('d-none')
                document.getElementById('email').classList.remove('d-none')
                document.getElementById('country').classList.remove('d-none')
                document.getElementById('uname').classList.add('d-none')
                document.getElementById('fname').classList.remove('d-none')
                loginModalState = false
            } else {
                document.getElementById('cpassword').classList.add('d-none')
                document.getElementById('remember-radio').classList.remove('d-none')
                document.getElementById('lost-password').classList.remove('d-none')
                document.getElementById('sign-in').classList.remove('d-none')
                document.getElementById('sign-up').classList.add('d-none')
                document.getElementById('email').classList.add('d-none')
                document.getElementById('country').classList.add('d-none')
                document.getElementById('uname').classList.remove('d-none')
                document.getElementById('fname').classList.add('d-none')
                loginModalState = true
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>