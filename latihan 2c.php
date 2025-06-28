<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2c</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            float: left;
            border: 1px solid #000;
            margin: 2px;
        }

        .clear {
            clear: both;
        }

        .ganjil {
            background-color: #003;
            color: #fff;
        }

        .genap {
            background-color: #999;
            color: #000;
        }
    </style>
</head>
<body>

<?php
$jumlah_baris = 5;

for ($i = 1; $i <= $jumlah_baris; $i++) {
    // Tentukan kelas berdasarkan ganjil/genap
    $kelas = ($i % 2 == 1) ? "ganjil" : "genap";

    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='kotak $kelas'>$j</div>";
    }
    echo "<div class='clear'></div>";
}
?>

</body>
</html>