<form action="" method="post">
    <input type="number" name="bulan" placeholder="Masukan Bulan!">
    <input type="number" name="tanggal" placeholder="Masukan Tanggal!">
    <input type="submit" value="kirim" name="tombol">
</form>

<?php

$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : 0;
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : 0;
$keterangan = "Data tidak valid";


if ($bulan > 0 && $bulan < 13) {
    if ($tanggal > 0 && $tanggal < 32) { 
        $keterangan = "benar";
        
        // Zodiak untuk Januari
        if ($bulan == 1 && $tanggal >= 20) {
            $keterangan = "Aquarius";
        } elseif ($bulan == 1 && $tanggal < 20) {
            $keterangan = "Capricorn";
        }
        
        // Zodiak untuk Februari
        elseif ($bulan == 2 && $tanggal >= 19) {
            $keterangan = "Pisces";
        } elseif ($bulan == 2 && $tanggal < 19) {
            $keterangan = "Aquarius";
        }
        
        // Zodiak untuk Maret
        elseif ($bulan == 3 && $tanggal >= 21) {
            $keterangan = "Aries";
        } elseif ($bulan == 3 && $tanggal < 21) {
            $keterangan = "Pisces";
        }
        
        // Zodiak untuk April
        elseif ($bulan == 4 && $tanggal >= 20) {
            $keterangan = "Taurus";
        } elseif ($bulan == 4 && $tanggal < 20) {
            $keterangan = "Aries";
        }
        
        // Zodiak untuk Mei
        elseif ($bulan == 5 && $tanggal >= 21) {
            $keterangan = "Gemini";
        } elseif ($bulan == 5 && $tanggal < 21) {
            $keterangan = "Taurus";
        }
        
        // Zodiak untuk Juni
        elseif ($bulan == 6 && $tanggal >= 21) {
            $keterangan = "Cancer";
        } elseif ($bulan == 6 && $tanggal < 21) {
            $keterangan = "Gemini";
        }
        
        // Zodiak untuk Juli
        elseif ($bulan == 7 && $tanggal >= 23) {
            $keterangan = "Leo";
        } elseif ($bulan == 7 && $tanggal < 23) {
            $keterangan = "Cancer";
        }
        
        // Zodiak untuk Agustus
        elseif ($bulan == 8 && $tanggal >= 23) {
            $keterangan = "Virgo";
        } elseif ($bulan == 8 && $tanggal < 23) {
            $keterangan = "Leo";
        }
        
        // Zodiak untuk September
        elseif ($bulan == 9 && $tanggal >= 23) {
            $keterangan = "Libra";
        } elseif ($bulan == 9 && $tanggal < 23) {
            $keterangan = "Virgo";
        }
        
        // Zodiak untuk Oktober
        elseif ($bulan == 10 && $tanggal >= 23) {
            $keterangan = "Scorpio";
        } elseif ($bulan == 10 && $tanggal < 23) {
            $keterangan = "Libra";
        }
        
        // Zodiak untuk November
        elseif ($bulan == 11 && $tanggal >= 22) {
            $keterangan = "Sagitarius";
        } elseif ($bulan == 11 && $tanggal < 22) {
            $keterangan = "Scorpio";
        }
        
        // Zodiak untuk Desember
        elseif ($bulan == 12 && $tanggal >= 22) {
            $keterangan = "Capricorn";
        } elseif ($bulan == 12 && $tanggal < 22) {
            $keterangan = "Sagitarius";
        }
    }
}

// Hasil
echo "Zodiak Anda adalah: " . $keterangan;
?>


