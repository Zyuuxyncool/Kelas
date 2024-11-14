<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "tokoku";

    $koneksi = mysqli_connect($host, $user, $password, $database);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/logo.webp" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="./index.php"><img src="./images/logo.webp" alt=""></a>
            </div>
            <div class="judul">
                <h1>Shop Fuijin</h1>
            </div>
            <div class="nav">
                <ul>
                    <a href="?menu=produk"><li>Produk</li></a>
                    <a href="?menu=cart"><li>Cart</li></a>
                    <?php
                        if (!isset($_SESSION['email'])) {
                            ?>
                            <a href="?menu=register"><li>Register</li></a>
                            <a href="?menu=login"><li>Login</li></a>
                            <?php
                        }else{
                            ?>

                            <li><?=$_SESSION['email']?></li>
                            <a href="?menu=logout"><li>Log Out</li></a>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php
                if (isset($_GET['menu'])) {
                    $menu = $_GET['menu'];
                    if ($menu == 'cart') {
                        require_once "./pages/cart.php";
                    }
                    if ($menu == 'login') {
                        require_once "./pages/login.php";
                    }
                    if ($menu == 'logout') {
                        require_once "./pages/logout.php";
                    }
                    if ($menu == 'register') {
                        require_once "./pages/register.php";
                    }
                    if ($menu == 'produk') {
                        require_once "./pages/produk.php";
                    }
                }else{
                    require_once "./pages/produk.php";
                }
            ?>
        </div>
        <div class="footer">
            <p>@2024 Web Ini Di Buat Oleh Fuijin</p>
        </div>
    </div>
</body>
</html>