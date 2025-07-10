<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex ">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <h1 class="sitename">Kelly</h1>
        </a>

        {{-- Navbar --}}
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/resume') }}">Resume</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        {{-- Social + Language selector --}}
        <div class="header-social d-flex  gap-2">
            <div class="header-social-links d-flex gap-2">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ strtoupper(app()->getLocale()) }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ url('uz/' . Request::path()) }}">🇺🇿 O‘zbekcha</a></li>
                    <li><a class="dropdown-item" href="{{ url('ru/' . Request::path()) }}">🇷🇺 Русский</a></li>
                </ul>
            </div>
        </div>

    </div>
</header>
