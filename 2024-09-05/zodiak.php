<?php

for ($i=1; $i <= 10; $i++) { 
    echo $i;

}

echo "<br>";
for ($i=10; $i >=0 ; $i--) { 
    echo $i;
}
echo "<br>";
    $ganjil = 7%2;
    echo $ganjil;

    echo "<br>";
    for ($i=1; $i <100 ; $i++) { 
        $ganjil=$i % 2;
        // echo $ganjil;
        if ($ganjil==0) {
            echo $i;
        }

       
    }
    echo "<br>";    
    $kkm = 80;
    $nilai = 85;
    if ($nilai > $kkm) {
        echo "Lulus";

    }else{
        echo "Tidak lulus";
    }
    echo "<br>";
    $status = "Tidak Lulus";

    if ($nilai > $kkm) {
        $status = "Lulus";
    } 
    echo $status;
    echo "<br>";
    
    $rapot = 0;
    $tugas = 1;

    if ($tugas == 1) {
        $rapot = 80;

    }
    echo $rapot;
    echo "<br>";

    
// Mendapatkan input bulan dan tanggal dari form
$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : 0;
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : 0;

$keterangan = "Data tidak valid";

// Mengecek apakah bulan dan tanggal valid
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

// Menampilkan hasil
echo "Zodiak Anda adalah: " . $keterangan;
?>

</body>
</html>

