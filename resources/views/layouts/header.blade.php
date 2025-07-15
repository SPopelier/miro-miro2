<header>
    <nav class="navbar sticky-top" style="background-color: #E3B46A" data-bs-theme="light">

        <div class="container-fluid">

            <img src="{{ asset('assets/logonoir.png')}}" alt="logo" height="50">

            <!-- Burger -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu (masqué sur mobile) -->
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav gap-4 justify-content-end">
                    <li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('product-list') }}">Explorer</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('personalize') }}">Personnaliser</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>