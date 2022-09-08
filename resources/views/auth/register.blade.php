
@section('custom-style')

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/select/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-wizard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">

@endsection
@extends('auth.layout')
@section('title','Register an Account')


@section('content')



 <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="index.html">
                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
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
                        <div class="col-lg-3 d-none d-lg-flex align-items-center p-0">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center">
                                <img class="img-fluid w-100" src="{{asset('app-assets/images/illustration/create-account.svg')}}" alt="multi-steps" />
                            </div>
                        </div>
                        <!-- /Left Text-->

                        <!-- Register-->
                        <div class="col-lg-9 d-flex align-items-center auth-bg px-2 px-sm-3 px-lg-5 pt-3">
                            <div class="width-700 mx-auto">
                                <div class="bs-stepper register-multi-steps-wizard shadow-none">
                                    <div class="bs-stepper-header px-0" role="tablist">
                                        <div class="step" data-target="#account-details" role="tab" id="account-details-trigger">
                                            <button type="button" class="step-trigger">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="home" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Account</span>
                                                    <span class="bs-stepper-subtitle">Enter email address</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                        </div>
                                        <div class="step" data-target="#personal-info" role="tab" id="personal-info-trigger">
                                            <button type="button" class="step-trigger">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="user" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Personal</span>
                                                    <span class="bs-stepper-subtitle">Enter Information</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                        </div>
                                        <div class="step" data-target="#billing" role="tab" id="billing-trigger">
                                            <button type="button" class="step-trigger">
                                                <span class="bs-stepper-box">
                                                    <i data-feather="credit-card" class="font-medium-3"></i>
                                                </span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Confirm</span>
                                                    <span class="bs-stepper-subtitle">Review Details</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-content px-0 mt-4">
                                        <div id="account-details" class="content" role="tabpanel" aria-labelledby="account-details-trigger">
                                            <div class="content-header mb-2">
                                                <h2 class="fw-bolder mb-75">Account Information</h2>
                                                <span>Enter your username password details</span>
                                            </div>
                                            <form>
                                                <div class="row">

                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="email">Email</label>
                                                        <input type="email" name="email" id="email" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="password">Password</label>
                                                        <div class="input-group input-group-merge form-password-toggle">
                                                            <input type="password" name="password" id="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="confirm-password">Confirm Password</label>
                                                        <div class="input-group input-group-merge form-password-toggle">
                                                            <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                        </div>
                                                    </div>



                                                    <div class="col-12 mb-1">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="multiStepsRememberMe" />
                                                            <label class="form-check-label" for="multiStepsRememberMe">Remember me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="d-flex justify-content-between mt-2">
                                                <button class="btn btn-outline-secondary btn-prev" disabled>
                                                    <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                    <i data-feather="chevron-right" class="align-middle ms-sm-25 ms-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
                                            <div class="content-header mb-2">
                                                <h2 class="fw-bolder mb-75">Personal Information</h2>
                                                <span>Enter your Information</span>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="mb-1 col-md-4">
                                                        <label class="form-label" for="first-name">First Name</label>
                                                        <input type="text" name="first-name" id="first-name" class="form-control" placeholder="John" />
                                                    </div>
                                                    <div class="mb-1 col-md-4">
                                                        <label class="form-label" for="last-name">Last Name</label>
                                                        <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Doe" />
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label class="form-label mb-1">Gender</label><br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male" />
                                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female" />
                                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="mobile-number">Mobile number</label>
                                                        <input type="text" name="mobile-number" id="mobile-number" class="form-control" placeholder="+1 472 765 3654" />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="select2-basic">Country</label>
                                                        <select class="select2 form-select" id="select2-basic">
                                                            <option selected value="">----------------</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Åland Islands">Åland Islands</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern Territories</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guernsey">Guernsey</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jersey">Jersey</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macao">Macao</option>
                                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montenegro">Montenegro</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Helena">Saint Helena</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Timor-leste">Timor-leste</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Viet Nam">Viet Nam</option>
                                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">Date of Birth</label>
                                                        <input type="text" class="form-control flatpickr-disabled-range" placeholder="YYYY-MM-DD" />
                                                    </div>
                                                    
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label">Profile Picture</label><br>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>

                                                    <div class="col-12 mb-1">
                                                        <label class="form-label" for="area-address">Mailing Address</label>
                                                        <input type="text" name="area-address" id="area-address" class="form-control" placeholder="Area, Street, Sector, Village" />
                                                    </div>

                                                    <div class="mb-1 col-12">
                                                        <label class="form-label" for="town-city">Emergency Contact</label>
                                                        <input type="text" name="town-city" id="town-city" class="form-control" placeholder="Name, Relation, Phone Number of Emergency Contact" />
                                                    </div>

                                                </div>
                                            </form>

                                            <div class="d-flex justify-content-between mt-2">
                                                <button class="btn btn-primary btn-prev">
                                                    <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                    <i data-feather="chevron-right" class="align-middle ms-sm-25 ms-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="billing" class="content" role="tabpanel" aria-labelledby="billing-trigger">


                                            <div class="col-12">
                                                <div class="card card-transaction">

                                                    <div class="card-body">

                                                        <div class="transaction-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar bg-light-success rounded me-1">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="at-sign" class="avatar-icon font-medium-3"></i>
                                                                    </div>
                                                                </div>
                                                                <span>Technology</span>
                                                            </div>
                                                            <div class="fw-bolder text-success">name@domain.com</div>
                                                        </div>
                                                        <div class="transaction-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar bg-light-success rounded me-1">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="lock" class="avatar-icon font-medium-3"></i>
                                                                    </div>
                                                                </div>
                                                                <span>Password</span>
                                                            </div>
                                                            <div class="fw-bolder text-success">********</div>
                                                        </div>
                                                        <div class="transaction-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar bg-light-success rounded me-1">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="user" class="avatar-icon font-medium-3"></i>
                                                                    </div>
                                                                </div>
                                                                <span>Full Name</span>
                                                            </div>
                                                            <div class="fw-bolder text-success">John Doe</div>
                                                        </div>
                                                        <div class="transaction-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar bg-light-success rounded me-1">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="phone-call" class="avatar-icon font-medium-3"></i>
                                                                    </div>
                                                                </div>
                                                                <span>Mobile No</span>
                                                            </div>
                                                            <div class="fw-bolder text-success">+977 9851094157</div>
                                                        </div>
                                                        <div class="transaction-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar bg-light-success rounded me-1">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="globe" class="avatar-icon font-medium-3"></i>
                                                                    </div>
                                                                </div>
                                                                <span>Country</span>
                                                            </div>
                                                            <div class="fw-bolder text-success">Nepal</div>
                                                        </div>
                                                        <div class="transaction-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar bg-light-success rounded me-1">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                                                    </div>
                                                                </div>
                                                                <span>Date of Birth</span>
                                                            </div>
                                                            <div class="fw-bolder text-success">2002-07-22</div>
                                                        </div>
                                                        <div class="transaction-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar bg-light-success rounded me-1">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="users" class="avatar-icon font-medium-3"></i>
                                                                    </div>
                                                                </div>
                                                                <span>Gender</span>
                                                            </div>
                                                            <div class="fw-bolder text-success">Male</div>
                                                        </div>
                                                        <div class="transaction-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar bg-light-success rounded me-1">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                                                    </div>
                                                                </div>
                                                                <span>Mailing Address</span>
                                                            </div>
                                                            <div class="fw-bolder text-success">Rua Fernao Lourenco, 2800070, Almada, Portugal</div>
                                                        </div>
                                                        <div class="transaction-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar bg-light-success rounded me-1">
                                                                    <div class="avatar-content">
                                                                        <i data-feather="alert-circle" class="avatar-icon font-medium-3"></i>
                                                                    </div>
                                                                </div>
                                                                <span>Emergency Contact</span>
                                                            </div>
                                                            <div class="fw-bolder text-success">Kiran Karki, Rua Fernao Lourenco, 2800-070, Portugal</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between mt-1">
                                                <button class="btn btn-primary btn-prev">
                                                    <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-success btn-submit">
                                                    <i data-feather="check" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Submit</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection


@section('custom-script')

<script src="{{asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    
    <script src="{{asset('app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
    
    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/auth-register.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/forms/form-wizard.js')}}"></script>


@endsection


