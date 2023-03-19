<nav class="navbar navbar-expand-lg bg-transparent fixed-top" data-aos="fade-down" data-aos-duration="2000">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('img/logo.png') }}" alt="Web Logo" width="100" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler btn-navigation" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('education') }}">Experience &amp; Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::routeIs('services*') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::routeIs('blog*') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::routeIs('portfolio*') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ Request::routeIs('contact*') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>