@include('includes.header')
<body>
<!-- Start Nav  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"> {{trans('website.company')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/"> {{trans('website.Home')}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.about')}}">{{trans('website.About')}} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.store')}}">{{trans('website.services')}}</a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.blog')}}">{{trans('website.blog')}}</a>
            </li>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li class="nav-item">
                    <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
</nav>

<!-- End Nav -->

@yield('content')

<!-- Start Footer  -->
@include('includes.footer');
