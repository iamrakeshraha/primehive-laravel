<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="page ">
        <div class="page-content z-index-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-md-4 d-block mx-auto">
                        <div class="text-center">
                            <!-- <img src="{{ asset('admin/images/logo.jpg') }}" class="header-img" alt="Pinlist logo"> -->
                        </div>
                        <div class="card mb-0">
                            <div class="card-header">
                                <h3 class="card-title text-center">Login to your Account</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ url('admin/login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username" class="form-label text-dark">Username</label>
                                        <input type="text" name="username" value="{{ old('username') }}"
                                            placeholder="Username" id="username"
                                            class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}"
                                            autofocus>

                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="form-label text-dark">Password</label>
                                        <input type="password" name="password" placeholder="Password" id="password"
                                            class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}">

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <a class="float-right small text-dark mt-1" href="{{ route('admin.password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            <input type="checkbox" class="custom-control-input" name="remember">
                                            <span class="custom-control-label text-dark">Remember me</span>
                                        </label>
                                    </div> --}}
                                    <div class="form-footer mt-2">
                                        <button type="submit"
                                            class="btn btn-primary btn-streach-md btn-block fs-15 text-uppercase">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
