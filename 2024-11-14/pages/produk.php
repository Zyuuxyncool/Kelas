<div class="produk">
    <h1>Produk</h1>
<?php
    $sql = "SELECT * FROM produk";
    $hasil = mysqli_query($koneksi, $sql);
    $baris = mysqli_num_rows($hasil);
    
    if ($baris == 0) {
        echo "<h1>Produk Kosong</h1>";
    } else {
        while ($row = mysqli_fetch_array($hasil)) {
            ?>
    <div class="detail-produk">
        <img src="images/<?= $row[5] ?>" alt="">
        <h3><?= $row[1] ?></h3>
        <p><?= $row[2] ?></p>
        <p>Stok : <strong><?= $row[4] ?></strong></p>
        <h3>Rp. <?= $row[3] ?></h3>
        <a href="?menu=cart&add=<?= $row[0] ?>"><button>Beli</button></a>
    </div>
            <?php
        }
    }
?>
</div>