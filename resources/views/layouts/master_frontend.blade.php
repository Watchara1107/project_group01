<!DOCTYPE html>
<html>

<head>
    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }} " rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">




</head>

<body>

    <header>
        <!-- ======= Header/Navbar ======= -->
        <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
            <div class="container">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <a class="navbar-brand text-brand" href="/">nana<span class="color-b">phan</span></a>

                <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link active" href="/">หน้าแรก</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/seller') }}">สินค้าขายดี</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/product') }}">สินค้าทั้งหมด</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/contact') }}">ติดต่อเรา</a>
                        </li>




                        @if (Route::has('login'))
                            @auth


                                <li class="nav-item">
                                    <a class="nav-link " href="{{ url('/admin/home') }}">admin</a>
                                </li>
                            @else
                                <li class="nav-item @@contact"><a class="nav-link"
                                        href="{{ route('login') }}">login</a></li>

                                @if (Route::has('register'))
                                    <li class="nav-item @@contact"><a class="nav-link"
                                            href="{{ route('register') }}">register</a></li>
                                @endif

                            @endauth


                        @endif
                    </ul>
                </div>

        </nav>
        <!-- End Header/Navbar -->
    </header>

    <div>
        @yield('content')
    </div>

    <footer class="row">
        <!-- Vendor JS Files -->
        <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
        <!-- Template Main JS File -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        {{-- {{ asset('frontend/') }} --}}
    </footer>

</body>

</html>
