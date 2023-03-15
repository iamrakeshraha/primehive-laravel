@extends('frontend.layouts.main')

@section('main-container')
    <div class="main-section">
        <div class="center login-page">
            <div class="login-form register-form">
                <h2 class="why-choose-heading">Join as a Service Provider</h2>
                <ul class="signup-verification">
                    <li class="verification">
                        <label>Phone Number Validation<em>*</em></label>
                        <div class="flex">
                            <select class="country-code">
                                <option value="">+91</option>
                                <option value="">+99</option>
                            </select>
                            <input type="text" class="input-field" placeholder="enter your phone number" name="">
                            <button class="bttn primary-button" id="mySizeChart">Get OTP</button>
                        </div>
                    </li>
                    <li class="verification">
                        <label>Email Validation<em>*</em></label>
                        <div class="flex">
                            <input type="text" class="input-field" placeholder="enter your email" name="">
                            <button class="bttn primary-button verified-bttn">Verified</button>
                        </div>
                    </li>
                    <li class="">
                        <label>Name</label>
                        <input type="text" class="input-field" placeholder="Name" name="">
                    </li>
                    <li class="">
                        <label>Choose Business or Individual<em>*</em></label>
                        <div class="radio_container">
                            <input type="radio" name="radio" id="business" checked>
                            <label class="radio-label" for="business">Business</label>
                            <input type="radio" name="radio" id="individual">
                            <label class="radio-label" for="individual">Individual</label>
                        </div>
                    </li>
                    <li class="">
                        <label>Location</label>
                        <input type="text" class="input-field" placeholder="Location" name="">
                    </li>
                    <li class="">
                        <label>Comapny/Individual Address</label>
                        <input type="text" class="input-field" placeholder="Comapny/Individual Address" name="">
                    </li>
                    <li class="">
                        <label>Password</label>
                        <input type="password" class="input-field" placeholder="Password" name="">
                    </li>
                    <li class="">
                        <label>Confirm Password</label>
                        <input type="password" class="input-field" placeholder="Confirm Password" name="">
                    </li>
                    </li>
                    <li>
                        captcha
                    </li>

                    <li>
                        <button class="bttn primary-button login-btn">Register</button>
                    </li>
                </ul>
            </div>
        </div>

    </div>
@endsection
