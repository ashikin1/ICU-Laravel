    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               
                  <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.logout') }}">Sign Out</a>
                    </li> --}}
                  </ul>
                    <ul class="navbar-nav ms-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('auth.logout') }}">
                                    Logout</a>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('auth.signin') }}">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('auth.signup') }}">Sign Up</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

    </nav>
