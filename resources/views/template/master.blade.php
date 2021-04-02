<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://unpkg.com/phosphor-icons"></script>

    <!-- CSS Libraries -->
    @stack('css')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/stisla/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/stisla/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/stisla/css/custom.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('template.main.navbar')
            @include('template.main.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('judul')</h1>
                        <div class="section-header-breadcrumb">
                            @yield('breadcrumb')
                        </div>
                    </div>

                    <div class="section-body">
                        @yield('main')
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy {{ \Carbon\Carbon::now()->format('Y') }} <div class="bullet">
                    </div> Develop By <a href="https://github.com/dioselvinus">Dio Selvinus Silalebit</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <!-- JS Libraies -->
    @stack('js')
    <script src="{{ asset('js/logout.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    
    <!-- Stisla -->
    <script src="{{ asset('vendor/stisla/js/custom.js') }}"></script>
    <script src="{{ asset('vendor/stisla/js/stisla.js') }}"></script>
    <script src="{{ asset('vendor/stisla/js/scripts.js') }}"></script>
    <!-- Vendor -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @include('sweetalert::alert')

</body>

</html>
