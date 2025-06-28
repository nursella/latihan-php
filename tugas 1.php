<!DOCTYPE html>
<html>
<head>
    <title>Tugas1.php - Kategori Bilangan</title>
</head>
<body>

<h2>Pengulangan untuk mencari kategori bilangan:</h2>
<ul>
<?php
// Fungsi untuk mengecek apakah bilangan adalah prima
function isPrima($angka) {
    if ($angka < 2) return false;
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) return false;
    }
    return true;
}

// Loop dari 1 sampai 20
for ($i = 1; $i <= 20; $i++) {
    $tipe = [];

    // Cek ganjil / genap
    if ($i % 2 == 0) {
        $tipe[] = "bilangan genap";
    } else {
        $tipe[] = "bilangan ganjil";
    }

    // Cek prima
    if (isPrima($i)) {
        $tipe[] = "bilangan prima";
    }

    // Tampilkan hasil
    echo "<li>Angka $i adalah " . implode(" dan sekaligus ", $tipe) . "</li>";
}
?>
</ul>

</body>
</html>