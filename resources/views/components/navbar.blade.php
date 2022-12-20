<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="{{ asset('images/logos/logo.svg'); }}" class="nav-link" style="width: 140px; height: 70px"  alt="EMRLogistic">
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav">
                    @if($page == "welcome")
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('welcome') }}">Ana Safya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('about') }}">İletişim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('gallery') }}">Galeri</a>
                        </li>
                    @elseif($page == "about")
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('welcome') }}">Ana Safya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('about') }}">İletişim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('gallery') }}">Galeri</a>
                        </li>
                    @elseif($page == "gallery")
                        <<li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('welcome') }}">Ana Safya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('about') }}">İletişim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('gallery') }}">Galeri</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

