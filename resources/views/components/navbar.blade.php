<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand 
                    @if (url()->current() === route('home'))
                        text-warning 
                    @else 
                        text-white
                    @endif"
                href="{{ route('home') }}">
                Distance Calculator
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="@if (url()->current() === route('pincodes.index')) nav-link text-warning @else nav-link text-white @endif" aria-current="page"
                            href="{{ route('pincodes.index') }}">Postal Data</a>
                    </li>

                    <li class="nav-item">
                        <a class="@if (url()->current() === route('birdview-distance.create')) nav-link text-warning @else nav-link text-white @endif" aria-current="page"
                            href="{{ route('birdview-distance.create') }}">Birdview Distance</a>
                    </li>

                    <li class="nav-item">
                        <a class="@if (url()->current() === route('driving-distance.create')) nav-link text-warning @else nav-link text-white @endif" aria-current="page"
                            href="{{ route('driving-distance.create') }}">Driving Distance</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
