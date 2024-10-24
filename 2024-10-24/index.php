<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'sekolah';
$koneksi = mysqli_connect($host, $user , $password , $database);

if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    $id = $_GET['id'];
    echo $menu;
    echo $id;

    if ($menu == 'edit') {
        $sql = "SELECT  * FROM siswa where id=$id";
        echo $sql;
    }
}
?>

<form action="" method="post">
    Nama :
    <input type="text" name="nama" placeholder="Masukan Nama">
    Alamat : 
    <input type="text" name="alamat" placeholder="Masukan Alamat">
    <input type="submit" value="simpan" name="simpan">
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO siswa VALUES ('', '$nama','$alamat')";
    // echo $sql;
    mysqli_query($koneksi, $sql);
}

if (isset($_GET["menu"])) {
    $menu = $_GET['menu'];
    $id = $_GET['id'];
    // echo $menu;
    // echo $id;

    if ($menu=='hapus') {
        $sql = "DELETE FROM siswa where id = $id";
        // echo $sql;
        mysqli_query($koneksi, $sql);
    }
}

    



$query = "SELECT * FROM siswa";
// echo $query;

$result = mysqli_query($koneksi, $query);
// var_dump($result);

// $nama = mysqli_fetch_assoc($result);
// var_dump($nama);

echo '<h1>Data Siswa</h1>';
echo '<br>';
echo '<table border =1>';
echo '<thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hapus</th>
            <th>Edit</th>

        </tr>
    </thead>
    <tbody>';

while ($row = mysqli_fetch_array($result)){
    // echo $row[1];
    // echo '&nbsp &nbsp';
    // echo $row[2];
    // echo '<br>';

    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td><a href="?id='.$row[0].'&menu=hapus">hapus</a></td>';
    echo '<td><a href="?id='.$row[0].'&menu=edit">edit</a></td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

echo '<h1>Data Kelas</h2>';
$query = "SELECT * FROM Kelas";
$result = mysqli_query($koneksi, $query);
?>

    <table border = 1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kelas</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
        while ($row = mysqli_fetch_array($result)){
    // echo $row[1];
    // echo '&nbsp &nbsp';
    // echo $row[2];
    // echo '<br>';

    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '</tr>';
}
            ?>
        </tbody>
    </table>