<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Kalkulator By : Zyuuxyncool</h2>
    
    <form method="POST">
        <input type="number" name="num1" placeholder="Angka 1" required>
        <input type="number" name="num2" placeholder="Angka 2" required>
        <br>
        <select name="operation">
            <option value="add">Tambah(+)</option>
            <option value="subtract">Kurang(-)</option>
            <option value="multiply">Kali(x)</option>
            <option value="divide">Bagi(/)</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Tidak bisa dibagi dengan nol!</p>";
                    exit;
                }
                break;
            default:
                echo "<p>Valid!!!</p>";
                exit;
        }

        echo "<p>Hasil: $result</p>";
    }
    ?>

</body>
</html>