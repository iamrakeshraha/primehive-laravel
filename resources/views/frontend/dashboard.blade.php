@extends('frontend.layouts.main')

@section('main-container')
    <div class="main-section">
        <section class="inner-container dashboard">
            <div class="center">
                <h2>
                    Your requests
                    <a href="javascript:void(0)" id="mySizeChart" class="new-request bttn" title="">Place new request</a>
                </h2>
                <ul class="requests-list">
                    <li>
                        <div class="lists-img">
                            <a href="javascript:void(0)" title=""><img src="images/icons.svg" alt=""></a>
                        </div>
                        <div class="lists-info">
                            <h3>House Sitter</h3>
                            <span class="dates">1 hour ago</span>
                            <h5>We've got professionals ready and available!</h5>
                            <div class="button-row">
                                <a href="javascript:void(0)">Close request</a>
                                <button class="bttn primary-button view-bttn">View professionals</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="lists-img">
                            <a href="javascript:void(0)" title=""><img src="images/icons.svg" alt=""></a>
                        </div>
                        <div class="lists-info">
                            <h3>Cleaning Contractor</h3>
                            <span class="dates">Tuesday, 24 Jan</span>
                            <h5>We've got professionals ready and available!</h5>
                            <div class="button-row">
                                <a href="javascript:void(0)">Close request</a>
                                <button class="bttn primary-button view-bttn">View professionals</button>
                            </div>
                        </div>
                    </li>
                    <li class="closed-request">
                        <div class="lists-img">
                            <a href="javascript:void(0)" title=""><img src="images/icons.svg" alt=""></a>
                        </div>
                        <div class="lists-info">
                            <h3>Cleaner</h3>
                            <span class="dates">Wednesday, 18 Jan</span>
                            <h5 class="">Your request has been closed</h5>
                            <div class="button-row">
                                <button class="bttn view-rqst-btn view-bttn">View request</button>
                            </div>
                        </div>
                    </li>
                </ul>

                <h2>Available Services</h2>
                <div class="available-service-details">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="service-icon"><img src="images/house-cleaning-icon.png" alt=""></span>
                                <h5>House Cleaning</h5>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="service-icon"><img src="images/car-wash-icon.png" alt=""></span>
                                <h5>Car Washing</h5>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="service-icon"><img src="images/carpet-wash-icon.png" alt=""></span>
                                <h5>Carpet Washing</h5>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="service-icon"><img src="images/window-clean-icon.png" alt=""></span>
                                <h5>Window Cleaning</h5>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="service-icon"><img src="images/roof-clean-icon.png" alt=""></span>
                                <h5>Roof Cleaning</h5>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="service-icon"><img src="images/furniture-clean-icon.png" alt=""></span>
                                <h5>Furniture Cleaning</h5>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="service-icon"><img src="images/deep-clean-icon.png" alt=""></span>
                                <h5>Deep Cleaning</h5>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span class="service-icon"><img src="images/others-service-icon.png" alt=""></span>
                                <h5>Other Services</h5>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    @endsection
