<?php
$data = [
    ["nama" => "Alfa", "umur" => 26],
    ["nama" => "Bela", "umur" => 27],
    ["nama" => "Cipto", "umur" => 24],
    ["nama" => "Dewi", "umur" => 28],
    ["nama" => "Elang", "umur" => 23],
    ["nama" => "Fina", "umur" => 29],
    ["nama" => "Gilang", "umur" => 30],
    ["nama" => "Hana", "umur" => 25],
    ["nama" => "Ivan", "umur" => 27],
    ["nama" => "Jihan", "umur" => 26],
    ["nama" => "Kamal", "umur" => 28],
    ["nama" => "Laras", "umur" => 24],
    ["nama" => "Mega", "umur" => 29],
    ["nama" => "Naufal", "umur" => 30],
    ["nama" => "Oma", "umur" => 25]
];

$json = json_encode($data, JSON_PRETTY_PRINT);
echo "<pre>$json</pre>";
?>
