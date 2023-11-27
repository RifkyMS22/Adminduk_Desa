<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Adminduk Palar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/layanan" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Layanan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/layanan"></a></li>
                      <li><a class="dropdown-item" href="#">Surat Keterangan</a></li>
                      <li><a class="dropdown-item" href="#">Surat Pengantar</a></li>
                      <li><a class="dropdown-item" href="#">Surat Pernyataan</a></li>
                    </ul>
                  </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/layanan">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>


                {{-- <li class="nav-item">
                    <a href="/login" class="nav-link" {{ ($active == "login") ? 'active' : '' }}><i class="bi bi-box-arrow-in-right"></i>Login</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>