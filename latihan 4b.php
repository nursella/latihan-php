<?php
// Latihan4b.php

$asean_countries = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

echo "Daftar Negara ASEAN awal:<br>";
echo "<ul>";
foreach ($asean_countries as $country) {
    echo "<li>" . $country . "</li>";
}
echo "</ul>";

// Menambah elemen baru pada urutan terakhir array
$asean_countries[] = "Laos";
$asean_countries[] = "Filipina";
$asean_countries[] = "Myanmar";

echo "Daftar Negara ASEAN baru:<br>";
echo "<ul>";
foreach ($asean_countries as $country) {
    echo "<li>" . $country . "</li>";
}
echo "</ul>";
?>