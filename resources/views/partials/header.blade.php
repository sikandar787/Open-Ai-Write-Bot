@include('partials.head')
<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1>{{ env('APP_NAME') }}</h1>
            <span>.</span>
        </a>

        <!-- Nav Menu -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="{{route('generate')}}">Generate</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#generated-images">Generated images</a></li>
            </ul>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <!-- End Nav Menu -->
        <a class="btn-getstarted" href="{{ route('login') }}">Get Started</a>
    </div>
</header>
<!-- End Header -->
