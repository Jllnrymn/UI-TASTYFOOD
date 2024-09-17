<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Tasty Food</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Sidebar Styling */
        .sidebar {
            background-color: #e0e0e0; /* Warna abu-abu */
            height: 100vh; /* Sidebar penuh sepanjang viewport */
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Atur item ke bagian atas */
        }

        .sidebar img {
            border-radius: 50%; /* Membuat gambar menjadi rounded */
            width: 80px; /* Lebar gambar */
            height: 80px; /* Tinggi gambar */
            display: block;
            margin: 0 auto 20px; /* Pusatkan gambar dengan margin bawah */
        }

        .sidebar .nav-link {
            color: #333;
            font-weight: 500;
            margin-bottom: 10px;
            transition: color 0.3s;
        }

        .sidebar .nav-link:hover {
            color: #007bff; /* Warna saat hover */
            text-decoration: none;
        }

        /* Dropdown Styling */
        .dropdown-toggle::after {
            display: none; /* Hapus panah default dari dropdown */
        }

        /* Navbar Styling */
        .navbar-custom {
            background-image: url('/img/Group-70.png'); /* Ganti dengan URL gambar yang diinginkan */
            background-size: cover;
            background-position: center;
        }

        .navbar-custom .navbar-brand, .navbar-custom .nav-link, .navbar-custom .dropdown-toggle {
            color: white;
        }

        .navbar-custom .nav-link:hover, .navbar-custom .dropdown-toggle:hover {
            color: #ffc107; /* Warna saat hover */
            text-decoration: none;
        }

        /* Logout Section Styling */
        .logout-section {
            margin-top: auto; /* Taruh di bagian bawah */
            text-align: center;
        }

        .logout-section a {
            color: #333;
            font-size: 24px;
            transition: color 0.3s;
        }

        .logout-section a:hover {
            color: #dc3545; /* Warna merah saat hover */
            text-decoration: none;
        }

        /* Responsiveness */
        @media (max-width: 992px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                width: 250px;
                height: 100%;
                transform: translateX(-100%);
                transition: transform 0.3s ease-in-out;
                z-index: 1040;
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .navbar-custom {
                margin-bottom: 0;
            }
        }

        .sidebar-toggler {
            color: white;
            font-size: 24px;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1030;
            display: none;
        }

        .overlay.show {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Overlay untuk sidebar pada perangkat kecil -->
    <div class="overlay" id="overlay"></div>

    <div class="d-flex flex-column flex-lg-row">
        <!-- Sidebar -->
        <div class="sidebar d-flex flex-column" id="sidebar">
            <!-- Gambar Rounded -->
            <img src="/img/indah.jpg" alt="Tasty Food Logo">
            <!-- Navigasi Sidebar -->
            <nav class="nav flex-column">
                <a class="nav-link" href="#">Home</a>
                
                <!-- Admin Dropdown -->
                <div class="nav-item">
                    <a class="nav-link d-flex justify-content-between align-items-center" href="#" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-expanded="false" id="adminLink">
                        Admin
                        <i class="bi bi-caret-down-fill" id="adminDropdownIcon"></i> <!-- Panah untuk dropdown -->
                    </a>
                    <div class="collapse" id="adminDropdown">
                        <ul class="nav flex-column ps-3">
                            <li><a class="nav-link" href="#">Galeri</a></li>
                            <li><a class="nav-link" href="#">Kontak</a></li>
                            <li><a class="nav-link" href="#">Berita</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Logout Section -->
            <div class="logout-section">
                <a href="#" title="Logout">
                    <i class="bi bi-box-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Konten Utama -->
        <div class="content w-100">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-custom">
                <div class="container-fluid">
                    <button class="navbar-toggler sidebar-toggler" type="button" id="sidebarToggle">
                        <i class="bi bi-list"></i>
                    </button>
                    <a class="navbar-brand" href="#">Tasty Food</a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#" title="Logout">
                                    <i class="bi bi-box-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Isi Konten Utama -->
            <div class="container-fluid p-4">
                <h1>Selamat Datang di Tasty Food</h1>
                <p>Ini adalah halaman utama. Tambahkan konten Anda di sini.</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script untuk toggle sidebar
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const overlay = document.getElementById('overlay');
        const adminDropdown = document.getElementById('adminDropdown');
        const adminDropdownIcon = document.getElementById('adminDropdownIcon');

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        });

        overlay.addEventListener('click', function() {
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
        });

        // Event listener untuk dropdown Admin agar icon berubah arah
        adminDropdown.addEventListener('show.bs.collapse', function () {
            adminDropdownIcon.classList.remove('bi-caret-down-fill');
            adminDropdownIcon.classList.add('bi-caret-up-fill'); // Panah ke atas
        });

        adminDropdown.addEventListener('hide.bs.collapse', function () {
            adminDropdownIcon.classList.remove('bi-caret-up-fill');
            adminDropdownIcon.classList.add('bi-caret-down-fill'); // Panah ke bawah
        });
    </script>
</body>
</html>