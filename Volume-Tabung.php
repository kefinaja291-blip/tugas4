<?php
/**
 * Script 4: Volume Tabung
 * Rumus: π × r² × t
 */

// Fungsi untuk menghitung volume tabung
function volumeTabung($jariJari, $tinggi) {
    $pi = pi();
    return $pi * pow($jariJari, 2) * $tinggi;
}

// Fungsi untuk menghitung luas permukaan tabung (bonus)
function luasPermukaanTabung($jariJari, $tinggi) {
    $pi = pi();
    return 2 * $pi * $jariJari * ($jariJari + $tinggi);
}

// Input data
$r = 5;
$t = 12;

// Proses perhitungan
$volume = volumeTabung($r, $t);
$luasPermukaan = luasPermukaanTabung($r, $t);

// Output hasil
echo "<h1>Rumus Volume Tabung</h1>\n";
echo "<hr>\n";
echo "<h2>Rumus: π × r² × t</h2>\n";
echo "<p><strong>Input:</strong></p>\n";
echo "Jari-jari (r) = {$r} cm<br>\n";
echo "Tinggi (t) = {$t} cm<br>\n";
echo "<p><strong>Perhitungan:</strong></p>\n";
echo "Volume = π × {$r}² × {$t}<br>\n";
echo "Volume = " . number_format(pi(), 4) . " × " . pow($r, 2) . " × {$t}<br>\n";
echo "Volume = " . number_format(pi() * pow($r, 2), 2) . " × {$t}<br>\n";
echo "<p><strong>Hasil:</strong></p>\n";
echo "<h3>Volume Tabung = " . number_format($volume, 2) . " cm³</h3>\n";

// Bonus: Luas permukaan
echo "<hr>\n";
echo "<h2>Bonus: Luas Permukaan Tabung</h2>\n";
echo "<p>Rumus: 2π × r × (r + t)</p>\n";
echo "Luas Permukaan = 2π × {$r} × ({$r} + {$t})<br>\n";
echo "Luas Permukaan = 2π × {$r} × " . ($r + $t) . "<br>\n";
echo "<h3>Luas Permukaan = " . number_format($luasPermukaan, 2) . " cm²</h3>\n";

// Informasi tambahan
echo "<hr>\n";
echo "<h2>Informasi Tabung:</h2>\n";
echo "• Diameter = 2 × jari-jari = " . (2 * $r) . " cm<br>\n";
echo "• Keliling alas = 2π × r = " . number_format(2 * pi() * $r, 2) . " cm<br>\n";
echo "• Luas alas = π × r² = " . number_format(pi() * pow($r, 2), 2) . " cm²<br>\n";

// Contoh dengan nilai lain
echo "<hr>\n";
echo "<h2>Contoh Lain:</h2>\n";
$contoh_data = [
    [3, 8],
    [7, 10],
    [4, 15],
    [6, 9],
    [8, 12]
];

echo "<table border='1' cellpadding='5'>\n";
echo "<tr><th>Jari-jari (cm)</th><th>Tinggi (cm)</th><th>Volume (cm³)</th></tr>\n";
foreach($contoh_data as $data) {
    $radius = $data[0];
    $height = $data[1];
    $vol = volumeTabung($radius, $height);
    echo "<tr><td>{$radius}</td><td>{$height}</td><td>" . number_format($vol, 2) . "</td></tr>\n";
}
echo "</table>\n";
?>