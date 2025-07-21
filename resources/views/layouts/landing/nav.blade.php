<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <div class="d-flex align-items-center">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Kedai Babe" class="img-fluid align-self-center" width="50" height="50" style="border-radius: 10px;">
            <a class="navbar-brand ml-2" href="{{ route('home') }}">
                KEDAI<br><small>BABE</small>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item {{ Route::is('menu') ? 'active' : '' }}"><a href="{{ route('menu') }}" class="nav-link">Menu</a></li>
                <li class="nav-item {{ Route::is('package') ? 'active' : '' }}"><a href="{{ route('package') }}" class="nav-link">Menu Paket</a></li>
            </ul>
        </div>
    </div>
</nav>
