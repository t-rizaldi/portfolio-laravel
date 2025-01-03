<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('v2.index') }}">
            <img src="{{ asset('img/logo-v2.svg') }}" alt="Rizaldi Logo" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('v2.index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('v2.service') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('v2.portfolio') }}">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('v2.blog') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('v2.contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
