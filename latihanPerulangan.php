<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307004">
    <meta name="author" content="Amro Alfien S.N">
</head>
<body>
    <?php 
    $limitBaris = 10;
    $konten = "*";

    for ($i = 0; $i < $limitBaris; $i++) {
        echo $konten . "<br>";
        $konten .= "*";
    }
    ?>
</body>
</html>