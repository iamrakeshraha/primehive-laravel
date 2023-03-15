@extends('frontend.layouts.main')

@section('main-container')
    <div class="main-section">
        <div class="banner">
            <div class="center banner-content">
                <h1>Find the perfect <br>cleaning professional for you</h1>
                <p>Get free quotes within minutes</p>
                <div class="search-form">
                    <input type="text" class="input-field" placeholder="Type location" name="">
                    <input type="text" class="input-field looking-field" placeholder="What are you looking for?"
                        name="">
                    <button class="bttn primary-button search-bttn">Search</button>
                </div>
            </div>
        </div>

        <section class="available-service inner-container">
            <div class="center">
                <h6>What We Are Offering</h6>
                <h2>Available Services</h2>
                <ul>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="service-icon"><img src="{{ url('frontend/images/house-cleaning-icon.png') }}"
                                    alt=""></span>
                            <h5>House <br>Cleaning</h5>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="service-icon"><img src="{{ url('frontend/images/car-wash-icon.png') }}"
                                    alt=""></span>
                            <h5>Car <br>Washing</h5>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="service-icon"><img src="{{ url('frontend/images/carpet-wash-icon.png') }}"
                                    alt=""></span>
                            <h5>Carpet <br>Washing</h5>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="service-icon"><img src="{{ url('frontend/images/window-clean-icon.png') }}"
                                    alt=""></span>
                            <h5>Window <br>Cleaning</h5>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="service-icon"><img src="{{ url('frontend/images/roof-clean-icon.png') }}"
                                    alt=""></span>
                            <h5>Roof <br>Cleaning</h5>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="service-icon"><img src="{{ url('frontend/images/furniture-clean-icon.png') }}"
                                    alt=""></span>
                            <h5>Furniture <br>Cleaning</h5>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="service-icon"><img src="{{ url('frontend/images/deep-clean-icon.png') }}"
                                    alt=""></span>
                            <h5>Deep <br>Cleaning</h5>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="service-icon"><img src="{{ url('frontend/images/others-service-icon.png') }}"
                                    alt=""></span>
                            <h5>Other <br>Services</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <h2 class="why-choose-heading">Why Choose PrimHive?</h2>
        <section class="about-section why-choose">
            <div class="center">

                <ul>
                    <li>
                        <div class="about-icon"><img src="{{ url('frontend/images/modern-equipment-icon.png') }}"
                                alt=""></div>
                        <div class="about-info">
                            <h4>Modern Equipment</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                        </div>
                    </li>
                    <li>
                        <div class="about-icon"><img src="{{ url('frontend/images/fair-prices.png') }}" alt="">
                        </div>
                        <div class="about-info">
                            <h4>Fair Prices</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                        </div>
                    </li>
                    <li>
                        <div class="about-icon"><img src="{{ url('frontend/images/dedicated-services.png') }}"
                                alt=""></div>
                        <div class="about-info">
                            <h4>Dedicated Services</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                        </div>
                    </li>
                    <li>
                        <div class="about-icon"><img src="{{ url('frontend/images/professional-staff.png') }}"
                                alt=""></div>
                        <div class="about-info">
                            <h4>Professional Staff</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>


    </div>
@endsection
