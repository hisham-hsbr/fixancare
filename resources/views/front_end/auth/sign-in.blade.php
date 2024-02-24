<!DOCTYPE html>
<html lang="en">

<head>
    @include('front_end.layouts.head')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                {{-- <h1><a href="index.html">Selecao</a></h1> --}}
                <a href="index.html"><img src="{{ asset('/storage/images/app/logo_white.png') }}" alt=""
                        width="187" height="20" class="img-fluid"></a>
            </div>
            <button class="btn btn-warning navbar-btn">Track Job</button>
            <nav id="navbar" class="navbar">
                @include('front_end.layouts.top-navbar-links')
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Inner Page</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Inner Page</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3 text-start">
                        <label class="form-label" for="email">Email address</label>
                        <div class="form-icon-container">
                            <input class="form-control form-icon-input" id="email" name="email" type="email"
                                value="" required autofocus autocomplete="username"
                                placeholder="Enter Email" /><span class="fas fa-user text-900 fs--1 form-icon"></span>
                        </div>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label" for="password">Password</label>
                        <div class="form-icon-container">
                            <input class="form-control form-icon-input" id="password" type="password" name="password"
                                required autocomplete="current-password" placeholder="Password" /><span
                                class="fas fa-key text-900 fs--1 form-icon"></span>
                        </div>
                    </div>
                    <div class="row flex-between-center mb-7">
                        <div class="col-auto">
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked" />
                                <label class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
                            </div>
                        </div>
                        <div class="col-auto"><a class="fs--1 fw-semi-bold"
                                href="{{ route('password.request') }}">Forgot
                                Password?</a></div>
                    </div>
                    <button class="btn btn-primary w-100 mb-3">Sign In</button>
                    <div class="text-center"><a class="fs--1 fw-bold" href="/register">Create an account</a>
                    </div>
                    <div class="text-center"><a class="fs--1 fw-bold" href="/">Back</a></div>
                </form>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Selecao</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front_end_links/selecao/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front_end_links/selecao/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front_end_links/selecao/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front_end_links/selecao/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front_end_links/selecao/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front_end_links/selecao/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('front_end_links/selecao/assets/js/main.js') }}"></script>

</body>

</html>
