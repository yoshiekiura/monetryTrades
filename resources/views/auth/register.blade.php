<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/images/background/MT_Trans_Vector.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background: url('{{ asset('assets/images/background/1.jpg') }}') no-repeat;">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST"
                    action="{{ route('user.register.post') }}"
                    >
                    @csrf
                    <span class="login100-form-title">
                        Sign Up
                    </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <input class="input100" type="text" value="{{ old('username') }}" name="username"
                            placeholder="Username">
                        <span class="focus-input100"></span>
                        @error('username')
                            <p class="">{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
                        <input class="input100" type="text" value="{{ old('email') }}" name="email"
                            placeholder="Email">
                        <span class="focus-input100"></span>
                        @error('email')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter firstname">
                        <input class="input100" type="text" value="{{ old('firstname') }}" name="firstname"
                            placeholder="Firstname">
                        <span class="focus-input100"></span>
                        @error('firstname')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter lastname">
                        <input class="input100" type="text" value="{{ old('lastname') }}" name="lastname"
                            placeholder="Lastname">
                        <span class="focus-input100"></span>
                        @error('lastname')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter phone">
                        <input class="input100" type="tell" value="{{ old('phone') }}" name="phone"
                            placeholder="Phone">
                        <span class="focus-input100"></span>
                        @error('phone')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter pin">
                        <input class="input100" type="number" value="{{ old('pin') }}" name="pin"
                            placeholder="PIN">
                        <span class="focus-input100"></span>
                        @error('pin')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Country">
                        <input class="input100" type="text" value="{{ old('country') }}" name="country"
                            placeholder="Country">
                        <span class="focus-input100"></span>
                        @error('country')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="wrap-input100  m-b-16">
                        <input class="input100" type="text" value="{{ !empty($ref) ? $ref : old('referral') }}" name="referral"
                            placeholder="Referral ID">
                    </div>
                    {{-- <span class="focus-input100"></span> --}}
                        @error('referral')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror

                    <div class="wrap-input100  m-b-16" data-validate="Please enter password">
                        <input class="input100" type="password" value="{{ old('password') }}" name="password"
                            placeholder="Password">
                        <span class="focus-input100"></span>
                        @error('password')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Please enter password">
                        <input class="input100" type="password" value="{{ old('password_confirmation') }}"
                            name="password_confirmation" placeholder="Confirm Password">
                        <span class="focus-input100"></span>
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="text-right p-t-13 p-b-23">
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" id="submit">
                            Sign Up
                        </button>
                    </div>

                    <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9">
                            Already have an account?
                        </span>

                        <a href="{{ route('user.pages.view', ['login']) }}" class="txt3">
                            Sign in now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
