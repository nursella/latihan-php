<?php
// Latihan4c.php

$asean_capitals = [
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
];

echo "Daftar Negara ASEAN dan Ibukota:<br>";
echo "<ul>";
foreach ($asean_capitals as $country => $capital) {
    echo "<li>" . $country . ": " . $capital . "</li>";
}
echo "</ul>";
?>