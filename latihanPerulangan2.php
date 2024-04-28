<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP - Latihan Perulangan 2</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307004">
    <meta name="author" content="Amro Alfien S.N">
</head>

<body>
    <?php
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    foreach ($angka as $a) {
        $cekAngka = ($a % 2) ? "Genap" : "Ganjil";
        echo "Nomor : $a " . $cekAngka . "<br>";
    }
    ?>
</body>

</html>