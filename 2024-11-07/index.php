<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 2 Candi</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./backgroud.css">
    <link rel="stylesheet" href="./navbar.css">
    <link rel="icon" href="./images/logo.jpg" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="header">
            <nav>
                <div class="logo">
                    <img class="logo-img" src="./images/logo.jpg" alt="Logo">
                </div>
                <h2>SMPN 2 CANDI SIDOARJO</h2>
                <div class="menu-toggle" id="menu-toggle">
                    &#9776;
                </div>
                <ul class="nav-links" id="nav-links">
                    <li><a href="?menu=Home">Home</a></li>
                    <li><a href="?menu=Sejarah">Sejarah</a></li>
                    <li><a href="?menu=Kegiatan">Kegiatan</a></li>
                    <li><a href="?menu=Galery">Galery</a></li>
                    <li><a href="?menu=Kontak">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="background">
            <div class="main-left">
                <h2>SMPN 2 CANDI</h2>
                <div class="text">I'am <span class="typing"></span></div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
            </div>
        </div>
        <div class="content">
            <?php
                if (isset($_GET['menu'])) {
                    $menu = $_GET['menu'];
                    // echo $menu;
                    if ($menu == "Home") {
                        require_once "./pages/home.php";
                    }
                    if ($menu == "Sejarah") {
                        require_once "./pages/sejarah.php";
                    }
                    if ($menu == "Kegiatan") {
                        require_once "./pages/kegiatan.php";
                    }
                    if ($menu == "Jadwal") {
                        require_once "./pages/jadwal.php";
                    }
                    if ($menu == "Kontak") {
                        require_once "./pages/kontak.php";
                    }
                    if ($menu == "Galery") {
                        require_once "./pages/galery.php";
                    }
                } else {
                    require_once "./pages/home.php";
                }
            ?>
        </div>
        <div class="footer">
            <p>©2024 Zyuuxyncool. Semua hak dilindungi.</p>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll('.carousel-item');
            const dots = document.querySelectorAll('.dot');
            let currentIndex = 0;

            function showSlides() {
                currentIndex++;
                if (currentIndex >= slides.length) {
                    currentIndex = 0;
                }
                updateCarousel(currentIndex);
                setTimeout(showSlides, 4000);
            }

            showSlides();
        });
    </script>
    <script src="./main.js"></script>
</body>
</html>