<?php
/**
 * Script 1: Luas Lingkaran
 * Rumus: π × r²
 */

// Fungsi untuk menghitung luas lingkaran
function luasLingkaran($jariJari) {
    $pi = pi();
    return $pi * pow($jariJari, 2);
}

// Input data
$r = 7;

// Proses perhitungan
$luas = luasLingkaran($r);

// Output hasil
echo "<h1>Rumus Luas Lingkaran</h1>\n";
echo "<hr>\n";
echo "<h2>Rumus: π × r²</h2>\n";
echo "<p><strong>Input:</strong></p>\n";
echo "Jari-jari (r) = {$r} cm<br>\n";
echo "<p><strong>Perhitungan:</strong></p>\n";
echo "Luas = π × {$r}²<br>\n";
echo "Luas = " . number_format(pi(), 4) . " × " . pow($r, 2) . "<br>\n";
echo "<p><strong>Hasil:</strong></p>\n";
echo "<h3>Luas Lingkaran = " . number_format($luas, 2) . " cm²</h3>\n";

// Contoh dengan nilai lain
echo "<hr>\n";
echo "<h2>Contoh Lain:</h2>\n";
$nilai_r = [3, 5, 10, 15];
foreach($nilai_r as $radius) {
    $hasil = luasLingkaran($radius);
    echo "r = {$radius} cm → Luas = " . number_format($hasil, 2) . " cm²<br>\n";
}
?>