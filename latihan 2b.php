<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2b</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            background-color: lightblue;
            text-align: center;
            line-height: 40px;ghgbb
            float: left;
            border: 1px solid #000;
            margin: 2px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
  
    $jumlah_baris = 5;

    for ($i = 1; $i <= $jumlah_baris; $i++) {
       
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='kotak'>$j</div>";
        }
        echo "<div class='clear'></div>"; /
    }
    ?>
</body>
</html>