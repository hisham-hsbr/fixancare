<div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
        {{-- <h1><a href="index.html">Selecao</a></h1> --}}
        <a href="index.html"><img src="{{ asset('/storage/images/app/logo_white.png') }}" alt="" width="187"
                height="20" class="img-fluid"></a>
    </div>
    <button class="btn btn-warning navbar-btn">Track Job</button>
    <nav id="navbar" class="navbar">
        @include('front_end.layouts.top-navbar-links')
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>
