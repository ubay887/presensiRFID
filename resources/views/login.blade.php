<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--load all styles -->
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('photos/logo_starbhak.ico') }}">
    <!------ Include the above in your HEAD tag ---------->

    <title>{{ config('app.name') }}</title>
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{ url('/') }}" method="POST">
                    @csrf
                    <span class="login100-form-title">
                        Login {{ config('app.name') }}
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="email atau username salah">
                        <input class="input100" type="text" name="username" placeholder="Email atau username"
                            value="{{ Request::old('username') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input {{ Request::old('pass') ? 'alert-validate' : '' }}"
                        data-validate="{{ Request::old('pass') ? 'password salah' : 'masukan password' }}">
                        <input class="input100" type="password" name="pass" placeholder="Password" autocomplete="off"
                            oninput="hideValidate()">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="text-right p-t-10 p-b-10">
                        <input type="checkbox" name="remember" id="remember" class="form-check-input ml-2 mt-1">
                        <label for="remember" class="mx-2 form-check-label">Ingat saya</label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-50">
                        <a class="txt2" href="#">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('photos/logo_starbhak.png') }}" alt="SMK Taruna Bhakti">
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/util.js') }}"></script>
</body>

</html>
