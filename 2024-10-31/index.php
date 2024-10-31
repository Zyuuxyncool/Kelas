<?php

    $identitas = ["Nama" => "Muhammad Andreas Athallah Saifa Anam", 
                    "Alamat" => "Perum Griya Mulya Blok BD 12",
                    "Telepon" => "085773301211",
                    "Email" => "andreasnation970@gmail.com",
                    "Fb" => "Andreas Athallah",
                    "Ig" => "Zyuuxyncool",
                    "Tiktok" => "Zyuxyncool"];

    $sekolah = ["tk" => "Nurul Uma",
                "sd" => "SDN Klurak",
                "smp" => "SMPN 2 Candi",
                "smk" => "SMKN 2 Buduran",
                "S1" => "UGM",
                "S2" => "ITB",
                "S3" => "UI"];

    $hoby = ["Meganalisa", "Sepak Bola", "Ngoding", "Game", "Jogging"];

    $skill = ["C++" => "Expert",
                "HTML" => "Master",
                "CSS" => "Master",
                "PHP" => "newbie",
                "JavaScript" => "GOD"];

    $deskripsi = ["Saya Adalah Programmer Tingkat Mid Yang hanya Bisa Bagian Front end saja <br>
                Dan Saya Mempunyai keinginan Menjadi Full Stack Development, Dan saya Rajin<br>
                Belajar dan juga Ibadah, Saya Suka Main Game genshin impcat<br>
                ,saya suka makanan manis manis dan juga mkanan berminyak<br>
                ,saya suka ngoding di malam hari<br>"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Riwayat Hidup</title>
    <style>

body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100em;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            max-width: 800px;
            text-align:center;
        }
        table {
            width: 100%; 
            border-collapse: collapse; 
            margin: 20px 0; 
        }
        th, td {
            border: 1px solid black; 
            padding: 5px; 
            text-align: center; 
        }

        ul, li{
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>DAFTAR RIWAYAT HIDUP</h1>
        <h2>Data Diri</h2>
        <table border="1px">
            <thead>
                    <tr>
                        <th>Data</th>
                        <th>Deskripsi</th>
                    </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($identitas as $key => $value) {
                        ?>
                            <tr>
                                <td><?= $key?></td>
                                <td><?= $value?></td> 
                            </tr>

                        <?php
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Riwayat Pendidikan</h2>
        <table border="1px">
            <thead>
                    <tr>
                        <th>Pendidikan</th>
                        <th>Nama Sekolah</th>
                    </tr>
            </thead>
            <tbody>
                    <?php
                    foreach ($sekolah as $key => $value) {
                        ?>
                            <tr>
                                    <td><?= $key?></td>
                                    <td><?= $value?></td>
                            </tr>
                        <?php
                    }
                    ?>
            </tbody>
        </table>
        <hr>
        <h2>Skill Progammer</h2>
        <table border="1px">
            <thead>
                    <tr>
                        <th>Skill</th>
                        <th>Level</th>
                    </tr>
            </thead>
            <tbody>
                    <?php
                    foreach ($skill as $key => $value) {
                        ?>
                            <tr>
                                <td><?=$key?></td>
                                <td><?=$value?></td>
                            </tr>
                        <?php
                    }
                    ?>
            </tbody>
                
        </table>
        <hr>
        <h2>My Hoby</h2>
        <ul>
            <?php
            foreach ($hoby as $key) {
                ?>
                    <li><?= $key ?></li>
                <?php
            }
            ?>
        </ul>
        <hr>
        <h2>My Story</h2>
        <p><?= $deskripsi[0] ?></p>
    </div>
</body>
</html>