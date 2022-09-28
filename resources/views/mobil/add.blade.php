@extends('layout/master')
@section('title', 'Tambah Data Mobil')
@section('content')
    <!--  Add New Address -->
    <div class="row mb-4">
        <!--  Pricing -->
        <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class='mb-3 bx bx-md bx-bar-chart-alt-2'></i>
                    <h5>Pricing</h5>
                    <p> Elegant pricing options modal popup example, easy to use in any page.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricingModal"> Show
                    </button>
                </div>
            </div>
        </div>
        <!--/  Pricing -->

        <!--  Add New Credit Card -->
        <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class='mb-3 bx bx-md bx-credit-card'></i>
                    <h5>Add New Credit Card</h5>
                    <p> Quickly collect the credit card details, built in input mask and form validation support.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal">
                        Show </button>
                </div>
            </div>
        </div>
        <!--/  Add New Credit Card -->

        <!--  Add New Address -->
        <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class='mb-3 bx bx-md bx-buildings'></i>
                    <h5>Add New Address</h5>
                    <p> Ready to use form to collect user address data with validation and custom input support.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewAddress">
                        Show </button>
                </div>
            </div>
        </div>
        <!--/  Add New Address -->

        <!--  Refer & Earn -->
        <div class="col-12 col-sm-6 col-lg-4 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class='mb-3 bx bx-md bx-gift'></i>
                    <h5>Refer & Earn</h5>
                    <p>Use Refer & Earn modal to encourage your exiting customers refer their friends & colleague.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#referAndEarn">
                        Show </button>
                </div>
            </div>
        </div>
        <!--/  Refer & Earn -->

        <!--  Edit User -->
        <div class="col-12 col-sm-6 col-lg-4 mb-md-0 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class='mb-3 bx bx-md bx-user'></i>
                    <h5>Edit User</h5>
                    <p>Easily update the user data on the go, built in form validation and custom controls.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser"> Show
                    </button>
                </div>
            </div>
        </div>
        <!--/  Edit User -->

        <!--  Enable OTP -->
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <i class='mb-3 bx bx-md bx-mobile-alt'></i>
                    <h5>Enable OTP</h5>
                    <p>Use this modal to enhance your application security by enabling authentication with OTP.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enableOTP"> Show
                    </button>
                </div>
            </div>
        </div>
        <!--/  Enable OTP -->
    </div>

    <!-- All Modals -->
    <!-- pricingModal -->

    <!-- /pricingModal -->

    <!-- Add New Credit Card Modal -->
    <div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3>Add New Card</h3>
                        <p>Add new card to complete payment</p>
                    </div>
                    <form id="addNewCCForm" class="row g-3" onsubmit="return false">
                        <div class="col-12">
                            <label class="form-label w-100" for="modalAddCard">Card Number</label>
                            <div class="input-group input-group-merge">
                                <input id="modalAddCard" name="modalAddCard" class="form-control credit-card-mask"
                                    type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2" />
                                <span class="input-group-text cursor-pointer p-1" id="modalAddCard2"><span
                                        class="card-type"></span></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalAddCardName">Name</label>
                            <input type="text" id="modalAddCardName" class="form-control" placeholder="John Doe" />
                        </div>
                        <div class="col-6 col-md-3">
                            <label class="form-label" for="modalAddCardExpiryDate">Exp. Date</label>
                            <input type="text" id="modalAddCardExpiryDate" class="form-control expiry-date-mask"
                                placeholder="MM/YY" />
                        </div>
                        <div class="col-6 col-md-3">
                            <label class="form-label" for="modalAddCardCvv">CVV Code</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="modalAddCardCvv" class="form-control cvv-code-mask" maxlength="3"
                                    placeholder="654" />
                                <span class="input-group-text cursor-pointer" id="modalAddCardCvv2"><i
                                        class="bx bx-help-circle text-muted" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Card Verification Value"></i></span>
                            </div>
                        </div>customradReady to use form to collect user address data with validation and custom input
                        support.
                        <div class="col-12">
                            <label class="switch">
                                <input type="checkbox" class="switch-input">
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                                <span class="switch-label">Save card for future billing?</span>
                            </label>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 mt-3">Submit</button>
                            <button type="reset" class="btn btn-label-secondary btn-reset mt-3" data-bs-dismiss="modal"
                                aria-label="Close">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Add New Credit Card Modal -->
    <!-- Add New Address Modal -->
    <div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="address-title">Add New Address</h3>
                        <p class="address-subtitle">Add new address for express delivery</p>
                    </div>
                    <form id="addNewAddressForm" class="row g-3" onsubmit="return false">

                        <div class="col-12">
                            <div class="row">
                                <div class="col-md mb-md-0 mb-3">
                                    <div class="form-check custom-option custom-option-icon">
                                        <label class="form-check-label custom-option-content" for="customRadioHome">
                                            <span class="custom-option-body">
                                                <i class="bx bx-home"></i>
                                                <span class="custom-option-title">Home</span>
                                                <small> Delivery time (9am – 9pm) </small>
                                            </span>
                                            <input name="customRadioIcon" class="form-check-input" type="radio" value=""
                                                id="customRadioHome" checked />
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md mb-md-0 mb-3">
                                    <div class="form-check custom-option custom-option-icon">
                                        <label class="form-check-label custom-option-content" for="customRadioOffice">
                                            <span class="custom-option-body">
                                                <i class='bx bx-briefcase'></i>
                                                <span class="custom-option-title"> Office </span>
                                                <small> Delivery time (9am – 5pm) </small>
                                            </span>
                                            <input name="customRadioIcon" class="form-check-input" type="radio" value=""
                                                id="customRadioOffice" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalAddressFirstName">First Name</label>
                            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName"
                                class="form-control" placeholder="John" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalAddressLastName">Last Name</label>
                            <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control"
                                placeholder="Doe" />
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="modalAddressCountry">Country</label>
                            <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                        </div>
                        <div class="col-12 ">
                            <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
                            <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control"
                                placeholder="12, Business Park" />
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
                            <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control"
                                placeholder="Mall Road" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalAddressLandmark">Landmark</label>
                            <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control"
                                placeholder="Nr. Hard Rock Cafe" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalAddressCity">City</label>
                            <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control"
                                placeholder="Los Angeles" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalAddressLandmark">State</label>
                            <input type="text" id="modalAddressState" name="modalAddressState" class="form-control"
                                placeholder="California" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalAddressZipCode">Zip Code</label>
                            <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control"
                                placeholder="99950" />
                        </div>
                        <div class="col-12">
                            <label class="switch">
                                <input type="checkbox" class="switch-input">
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                                <span class="switch-label">Use as a billing address?</span>
                            </label>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                aria-label="Close">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Add New Address Modal -->
    <!-- Refer & Earn Modal -->
    <div class="modal fade" id="referAndEarn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-refer-and-earn">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3>Refer & Earn</h3>
                        <p class="text-center mb-5 w-75 m-auto">Invite your friend to Sneat, if they sign up, you and your
                            friend will get 30 days free trial.</p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4 px-4">
                            <div class="d-flex justify-content-center mb-4">
                                <div class="modal-refer-and-earn-step bg-label-primary">
                                    <i class='bx bx-message-square-dots'></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5>Send Invitation 🤟🏻</h5>
                                <p class="mb-lg-0">Send your referral link to your friend</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 px-4">
                            <div class="d-flex justify-content-center mb-4">
                                <div class="modal-refer-and-earn-step bg-label-primary">
                                    <i class='bx bx-detail'></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5>Registration 👩🏻‍💻</h5>
                                <p class="mb-lg-0">Let them register to our services</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 px-4">
                            <div class="d-flex justify-content-center mb-4">
                                <div class="modal-refer-and-earn-step bg-label-primary">
                                    <i class='bx bx-gift'></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5>Free Trial 🎉</h5>
                                <p class="mb-0">Your friend will get 30 days free trial</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-5" />
                    <h5>Invite your friends</h5>
                    <form class="row g-3" onsubmit="return false">
                        <div class="col-lg-10">
                            <label class="form-label" for="modalRnFEmail">Enter your friend’s email address and invite
                                them to join Sneat 😍</label>
                            <input type="text" id="modalRnFEmail" class="form-control" placeholder="example@domain.com"
                                aria-label="example@domain.com">
                        </div>
                        <div class="col-lg-2 d-flex align-items-end">
                            <button type="button" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                    <h5 class="mt-4">Share the referral link</h5>
                    <form class="row g-3" onsubmit="return false">
                        <div class="col-lg-9">
                            <label class="form-label" for="modalRnFLink">You can also copy and send it or share it on
                                your social media. 🥳</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="modalRnFLink" class="form-control"
                                    value="https://themeselection.com">
                                <span class="input-group-text text-primary cursor-pointer" id="basic-addon33">Copy
                                    link</span>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-end">
                            <div class="btn-social">
                                <button type="button" class="btn btn-icon btn-facebook mr-2"><i
                                        class="tf-icons bx bxl-facebook"></i></button>
                                <button type="button" class="btn btn-icon btn-twitter mr-2"><i
                                        class="tf-icons bx bxl-twitter"></i></button>
                                <button type="button" class="btn btn-icon btn-linkedin"><i
                                        class="tf-icons bx bxl-linkedin"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Refer & Earn Modal -->
    <!-- Edit User Modal -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3>Edit User Information</h3>
                        <p>Updating user details will receive a privacy audit.</p>
                    </div>
                    <form id="editUserForm" class="row g-3" onsubmit="return false">
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserFirstName">First Name</label>
                            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                class="form-control" placeholder="John" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserLastName">Last Name</label>
                            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                class="form-control" placeholder="Doe" />
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="modalEditUserName">Username</label>
                            <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control"
                                placeholder="john.doe.007" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserEmail">Email</label>
                            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control"
                                placeholder="example@domain.com" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserStatus">Status</label>
                            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select"
                                aria-label="Default select example">
                                <option selected>Status</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Suspended</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditTaxID">Tax ID</label>
                            <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text">+1</span>
                                <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                    class="form-control phone-number-mask" placeholder="202 555 0111" />
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserLanguage">Language</label>
                            <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select"
                                multiple>
                                <option value="">Select</option>
                                <option value="english" selected>English</option>
                                <option value="spanish">Spanish</option>
                                <option value="french">French</option>
                                <option value="german">German</option>
                                <option value="dutch">Dutch</option>
                                <option value="hebrew">Hebrew</option>
                                <option value="sanskrit">Sanskrit</option>
                                <option value="hindi">Hindi</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserCountry">Country</label>
                            <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="switch">
                                <input type="checkbox" class="switch-input">
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                                <span class="switch-label">Use as a billing address?</span>
                            </label>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                aria-label="Close">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Edit User Modal -->

    <!-- Enable OTP Modal -->
    <div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-5">Enable One Time Password</h3>
                    </div>
                    <h6>Verify Your Mobile Number for SMS</h6>
                    <p>Enter your mobile phone number with country code and we will send you a verification code.</p>
                    <form id="enableOTPForm" class="row g-3" onsubmit="return false">
                        <div class="col-12">
                            <label class="form-label" for="modalEnableOTPPhone">Phone Number</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text">+1</span>
                                <input type="text" id="modalEnableOTPPhone" name="modalEnableOTPPhone"
                                    class="form-control phone-number-otp-mask" placeholder="202 555 0111" />
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                aria-label="Close">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Enable OTP Modal -->




    <!-- Pricing Modal -->
    <div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-simple modal-pricing">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- Pricing Plans -->
                    <div class="pricing-plans">
                        <div class="text-center mb-3">
                            <h3>Find the right plan for your site</h3>
                            <p> Get started with us - it's perfect for individuals and teams. Choose a subscription plan
                                that meets your needs. </p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 my-5 pt-sm-5">
                            <label class="switch switch-primary ps-sm-5 mt-3 me-0">
                                <span class="switch-label ps-0 ms-sm-5">Monthly</span>
                                <input type="checkbox" class="switch-input price-duration-toggler" checked />
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                                <span class="switch-label">Annual</span>
                            </label>
                            <div class="pricing-offer mt-n5 ms-n5 d-none d-sm-block">
                                <img src="../../assets/img/pages/pricing-arrow-light.png" alt="arrow img"
                                    class="position-absolute scaleX-n1-rtl"
                                    data-app-dark-img="pages/pricing-arrow-dark.png"
                                    data-app-light-img="pages/pricing-arrow-light.png">
                                <span class="badge badge-sm bg-label-primary ms-4 mt-2">Save upto 10%</span>
                            </div>
                        </div>
                        <div class="row mx-0 gy-3">
                            <!-- Starter -->
                            <div class="col-xl mb-lg-0 lg-4">
                                <div class="card border shadow-none">
                                    <div class="card-body">
                                        <h3 class="fw-bold text-center text-uppercase mt-3">Starter</h3>
                                        <div class="my-4 py-2 text-center">
                                            <img src="../../assets/img/icons/unicons/bookmark.png" alt="Starter Image"
                                                height="80">
                                        </div>

                                        <div class="text-center mb-4">
                                            <div class="mb-2 d-flex justify-content-center">
                                                <sup class="h5 pricing-currency mt-3 mb-0 me-1">$</sup>
                                                <h1 class="fw-bold h1 mb-0">0</h1>
                                                <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                                            </div>
                                        </div>

                                        <ul class="ps-3 pt-4 pb-2 list-unstyled">
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Rich landing pages</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> 100+ components</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
                                        </ul>

                                        <a href="auth-register-basic.html" class="btn btn-label-primary d-grid w-100">Get
                                            started for free</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Exclusive -->
                            <div class="col-xl mb-lg-0 lg-4">
                                <div class="card border border-primary shadow-none">
                                    <div class="card-body">
                                        <div class="pricing-exclusive text-end m-n2">
                                            <span class="badge bg-label-primary">Exclusive</span>
                                        </div>
                                        <h3 class="fw-bold text-center text-uppercase mt-2">Pro</h3>
                                        <div class="my-4 py-2 text-center">
                                            <img src="../../assets/img/icons/unicons/wallet-round.png" alt="Pro Image"
                                                height="80">
                                        </div>
                                        <div class="text-center mb-4">
                                            <div class="mb-2 d-flex justify-content-center">
                                                <sup class="h5 pricing-currency mt-3 mb-0 me-1">$</sup>
                                                <h1 class="price-toggle price-yearly fw-bold h1 mb-0">42</h1>
                                                <h1 class="price-toggle price-monthly fw-bold h1 mb-0 d-none">49</h1>
                                                <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                                            </div>
                                            <small
                                                class=" position-absolute start-0 end-0 m-auto price-yearly price-yearly-toggle text-muted">$
                                                499 / year</small>
                                        </div>

                                        <ul class="ps-3 pt-4 pb-2 list-unstyled">
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Up to 5 users</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> 120+ components</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Monthly updates</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Integrations</li>
                                        </ul>

                                        <a href="auth-register-basic.html" class="btn btn-primary d-grid w-100">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Enterprise -->
                            <div class="col-xl">
                                <div class="card border shadow-none">
                                    <div class="card-body">
                                        <h3 class="text-center text-uppercase fw-bold mt-3">Enterprise</h3>

                                        <div class="my-4 py-2 text-center">
                                            <img src="../../assets/img/icons/unicons/briefcase-round.png" alt="Pro Image"
                                                height="80">
                                        </div>

                                        <div class="text-center mb-4">
                                            <div class="mb-2 d-flex justify-content-center">
                                                <sup class="h5 pricing-currency mt-3 mb-0 me-1">$</sup>
                                                <h1 class="price-toggle price-yearly fw-bold h1 mb-0">84</h1>
                                                <h1 class="price-toggle price-monthly fw-bold h1 mb-0 d-none">99</h1>
                                                <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                                            </div>
                                            <small
                                                class=" position-absolute start-0 end-0 m-auto price-yearly price-yearly-toggle text-muted">$
                                                999 / year</small>
                                        </div>

                                        <ul class="ps-3 pt-4 pb-2 list-unstyled">
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Up to 10 users</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> 150+ components</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Monthly updates</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Integrations</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Product Support</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> API access</li>
                                            <li class="mb-2"><span
                                                    class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                                        class="bx bx-check bx-xs"></i></span> Speedy build tooling</li>
                                        </ul>

                                        <a href="auth-register-basic.html" class="btn btn-label-primary d-grid w-100">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Pricing Plans -->
                </div>
            </div>
        </div>
    </div>
@endsection
