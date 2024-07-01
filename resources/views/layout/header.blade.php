<header class="py-2">
    <div class="container-fluid px-3">

        <nav class="navbar navbar-expand-lg ">

            <a class="navbar-brand d-flex align-items-center text-decoration-none gap-0"
                href="{{ route('home', ['locale' => app()->getLocale()]) }}">
                <div class="logo">
                    <img style="height:100%;" src="{{ asset('assets/logo-fav.webp') }}" alt="Logo">
                </div>
                <div class="fs-5 ml-2 text-light fw-semibold text-wrap logo-text">COMPLETE CREDIT COUNSELING INC.</div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end gap-2" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-light fs-6"
                            href="{{ route('home', ['locale' => app()->getLocale()]) }}">
                            @lang('header.nav1-link1')
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-light fs-6"
                            href="{{ route('pricing', ['locale' => app()->getLocale()]) }}">@lang('header.nav1-link2')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-light fs-6" href="#">@lang('header.nav1-link3')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-light fs-6" href="#">@lang('header.nav1-link4')</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="{{ url(changeLang(request()->path())) }}"
                        class="btn btn-primary me-2 mb-2 mb-md-0">@lang('header.nav2-link1')</a>
                    @if (session()->has('client_id'))
                        <a href="{{ route('client.logout', ['locale' => app()->getLocale()]) }}"
                            class="btn btn-primary me-2 mb-2 mb-md-0">{{__('lang.logout')}}</a>
                    @else
                        <a href="{{ route('client.register', ['locale' => app()->getLocale()]) }}"
                            class="btn btn-primary me-2 mb-2 mb-md-0">{{__('lang.signup')}}</a>
                    @endif

                </div>
            </div>

        </nav>
    </div>
</header>
