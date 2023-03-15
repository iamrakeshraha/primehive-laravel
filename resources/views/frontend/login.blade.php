@extends('frontend.layouts.main')

@section('main-container')
    <div class="main-section">
        <div class="center login-page">
            <div class="login-form">
                <h2 class="why-choose-heading">Login</h2>
                <ul>
                    <li>
                        <label>Email</label>
                        <input type="text" class="input-field" placeholder="enter your email" name="">
                    </li>
                    <li>
                        <label>Password</label>
                        <input type="password" class="input-field" placeholder="enter your password" name="">
                    </li>
                    <li class="flex">
                        <div class="form-group">
                            <input type="checkbox" id="rememberme">
                            <label for="rememberme">Remember me</label>
                        </div>
                        <a href="javascript:void(0)" class="forgot-pass">Forgot password?</a>
                    </li>
                    <li>
                        <button class="bttn primary-button login-btn">Log in</button>
                    </li>
                    <li>
                        <span>OR</span>
                    </li>
                    <li>
                        <a href="{{ url('register') }}" title="" class="join-as">
                            <img src="{{ url('frontend/images/join-icon.png') }}" alt="">
                            Join as a Service Provider
                        </a>
                    </li>
                </ul>
            </div>
        </div>


    </div>
@endsection
