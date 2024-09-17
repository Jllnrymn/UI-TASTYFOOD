<div>
    <div class="navbar-background">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#" style="font-weight: bold;">TASTY FOOD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="/home" style="color: white;">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tentang" style="color: white;">TENTANG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/berita" style="color: white;">BERITA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/galeri" style="color: white;">GALERI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontak" style="color: white;">KONTAK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login" style="color: white;">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{ $slot }}
    </div>
</div>