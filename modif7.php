<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggalan</title>
</head>
<body>
    <?php
     echo date("m-F-Y, g:i:s a") . "<br>";
     echo("Format tanggal yang lain") . "<br>";
    // Tampilkan tanggal dan waktu dengan format tertentu
    echo  date("Y-m-d H:i:s") . "<br>";
    echo date("d/m/Y H:i:s") . "<br>";
    echo date("m-F-Y, g:i:s a") . "<br>";
    echo date("d/m/Y, H:i:s") . "<br>";
    echo date("l, F jS Y") . "<br>";
    ?>
</body>
</html>
