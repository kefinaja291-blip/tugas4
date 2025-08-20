<?php
/**
 * Script 2: Teorema Pythagoras
 * Rumus: c = √(a² + b²)
 */

// Fungsi untuk menghitung teorema pythagoras
function teoremaPythagoras($a, $b) {
    return sqrt(pow($a, 2) + pow($b, 2));
}

// Input data
$sisi_a = 3;
$sisi_b = 4;

// Proses perhitungan
$sisi_c = teoremaPythagoras($sisi_a, $sisi_b);

// Output hasil
echo "<h1>Teorema Pythagoras</h1>\n";
echo "<hr>\n";
echo "<h2>Rumus: c = √(a² + b²)</h2>\n";
echo "<p><strong>Input:</strong></p>\n";
echo "Sisi a = {$sisi_a}<br>\n";
echo "Sisi b = {$sisi_b}<br>\n";
echo "<p><strong>Perhitungan:</strong></p>\n";
echo "c = √({$sisi_a}² + {$sisi_b}²)<br>\n";
echo "c = √(" . pow($sisi_a, 2) . " + " . pow($sisi_b, 2) . ")<br>\n";
echo "c = √" . (pow($sisi_a, 2) + pow($sisi_b, 2)) . "<br>\n";
echo "<p><strong>Hasil:</strong></p>\n";
echo "<h3>Sisi c (hipotenusa) = " . number_format($sisi_c, 2) . "</h3>\n";

// Verifikasi dengan rumus pythagoras
$verifikasi = pow($sisi_a, 2) + pow($sisi_b, 2);
$verifikasi_c = pow($sisi_c, 2);
echo "<p><strong>Verifikasi:</strong></p>\n";
echo "a² + b² = " . number_format($verifikasi, 2) . "<br>\n";
echo "c² = " . number_format($verifikasi_c, 2) . "<br>\n";
echo "Hasil: " . (abs($verifikasi - $verifikasi_c) < 0.01 ? "✓ Benar" : "✗ Salah") . "<br>\n";

// Contoh dengan nilai lain
echo "<hr>\n";
echo "<h2>Contoh Lain:</h2>\n";
$contoh_data = [
    [5, 12],
    [8, 15],
    [6, 8],
    [9, 12]
];

foreach($contoh_data as $data) {
    $a = $data[0];
    $b = $data[1];
    $c = teoremaPythagoras($a, $b);
    echo "a = {$a}, b = {$b} → c = " . number_format($c, 2) . "<br>\n";
}
?>