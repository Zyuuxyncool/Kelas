<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form action="" method="get">
    <input type="number" name="bil1" placeholder="Bilangan 1">
    <input type="number" name="bil2" placeholder="Bilangan 2">
    <input type="submit" name="tambah" value="tambah">
    <input type="submit" name="kali" value="kali">
    <input type="submit" name="kurang" value="kurang">
    <input type="submit" name="bagi" value="bagi">
</form>
</body>
</html>

<?php
    if (isset($_GET['tambah'])) {
        $bil1 = $_GET['bil1'];
        $bil2 = $_GET['bil2'];
        $hasil = $bil1 + $bil2;
        echo $hasil;
    }
    if (isset($_GET['kali'])) {
        $bil1 = $_GET['bil1'];
        $bil2 = $_GET['bil2'];
        $hasil = $bil1 * $bil2;
        echo $hasil;
    }

    if (isset($_GET['kurang'])) {
        $bil1 = $_GET['bil1'];
        $bil2 = $_GET['bil2'];
        $hasil = $bil1 - $bil2;
        echo $hasil;
    }
    if (isset($_GET['bagi'])) {
        $bil1 = $_GET['bil1'];
        $bil2 = $_GET['bil2'];
        $hasil = $bil1 / $bil2;
        echo $hasil;
    }
?>