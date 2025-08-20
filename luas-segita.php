<?php
/**
 * Script 3: Luas Segitiga
 * Rumus: ½ × alas × tinggi
 */

// Fungsi untuk menghitung luas segitiga
function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Input data
$alas = 10;
$tinggi = 8;

// Proses perhitungan
$luas = luasSegitiga($alas, $tinggi);

// Output hasil
echo "<h1>Rumus Luas Segitiga</h1>\n";
echo "<hr>\n";
echo "<h2>Rumus: ½ × alas × tinggi</h2>\n";
echo "<p><strong>Input:</strong></p>\n";
echo "Alas = {$alas} cm<br>\n";
echo "Tinggi = {$tinggi} cm<br>\n";
echo "<p><strong>Perhitungan:</strong></p>\n";
echo "Luas = ½ × {$alas} × {$tinggi}<br>\n";
echo "Luas = 0.5 × {$alas} × {$tinggi}<br>\n";
echo "Luas = " . (0.5 * $alas) . " × {$tinggi}<br>\n";
echo "<p><strong>Hasil:</strong></p>\n";
echo "<h3>Luas Segitiga = " . number_format($luas, 2) . " cm²</h3>\n";

// Informasi tambahan
echo "<hr>\n";
echo "<h2>Informasi Tambahan:</h2>\n";
echo "• Segitiga adalah bangun datar dengan 3 sisi<br>\n";
echo "• Untuk menghitung luas, kita memerlukan alas dan tinggi<br>\n";
echo "• Tinggi harus tegak lurus dengan alas<br>\n";

// Contoh dengan nilai lain
echo "<hr>\n";
echo "<h2>Contoh Lain:</h2>\n";
$contoh_data = [
    [6, 4],
    [12, 9],
    [15, 10],
    [8, 6],
    [20, 12]
];

echo "<table border='1' cellpadding='5'>\n";
echo "<tr><th>Alas (cm)</th><th>Tinggi (cm)</th><th>Luas (cm²)</th></tr>\n";
foreach($contoh_data as $data) {
    $a = $data[0];
    $t = $data[1];
    $l = luasSegitiga($a, $t);
    echo "<tr><td>{$a}</td><td>{$t}</td><td>" . number_format($l, 2) . "</td></tr>\n";
}
echo "</table>\n";
?>