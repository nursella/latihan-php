<?php
$kota_makanan = [
    ["Kota" => "Jakarta", "Makanan Khas" => "Gado-gado", "Harga" => 25000],
    ["Kota" => "Surabaya", "Makanan Khas" => "Rujak Cingur", "Harga" => 30000],
    ["Kota" => "Bandung", "Makanan Khas" => "Siomay", "Harga" => 15000],
    ["Kota" => "Medan", "Makanan Khas" => "Bika Ambon", "Harga" => 20000],
    ["Kota" => "Makassar", "Makanan Khas" => "Coto Makassar", "Harga" => 35000],
    ["Kota" => "Palembang", "Makanan Khas" => "Pempek", "Harga" => 18000],
    ["Kota" => "Semarang", "Makanan Khas" => "Lumpia", "Harga" => 12000],
    ["Kota" => "Yogyakarta", "Makanan Khas" => "Gudeg", "Harga" => 28000],
    ["Kota" => "Denpasar", "Makanan Khas" => "Sate Lilit", "Harga" => 22000],
    ["Kota" => "Malang", "Makanan Khas" => "Bakso Malang", "Harga" => 17000]
];

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Kota</th>";
echo "<th>Makanan Khas</th>";
echo "<th>Harga</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($kota_makanan as $data_kota) {
    echo "<tr>";
    echo "<td>" . $data_kota["Kota"] . "</td>";
    echo "<td>" . $data_kota["Makanan Khas"] . "</td>";
    echo "<td>Rp " . number_format($data_kota["Harga"], 0, ',', '.') . "</td>"; // Menambahkan 'Rp ' dan format ribuan
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>