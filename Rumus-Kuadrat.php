<?php
/**
 * Script 5: Rumus Kuadrat
 * Rumus: x = (-b ± √(b² - 4ac)) / 2a
 */

// Fungsi untuk menghitung discriminant
function hitungDiscriminant($a, $b, $c) {
    return pow($b, 2) - (4 * $a * $c);
}

// Fungsi untuk menghitung akar-akar persamaan kuadrat
function rumusKuadrat($a, $b, $c) {
    $discriminant = hitungDiscriminant($a, $b, $c);
    $hasil = [];
    
    if ($discriminant < 0) {
        $hasil['status'] = "Tidak ada akar real";
        $hasil['discriminant'] = $discriminant;
        $hasil['akar'] = null;
    } elseif ($discriminant == 0) {
        $x = -$b / (2 * $a);
        $hasil['status'] = "Satu akar real (kembar)";
        $hasil['discriminant'] = $discriminant;
        $hasil['akar'] = [$x];
    } else {
        $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
        $hasil['status'] = "Dua akar real berbeda";
        $hasil['discriminant'] = $discriminant;
        $hasil['akar'] = [$x1, $x2];
    }
    
    return $hasil;
}

// Input data
$a = 1;
$b = -5;
$c = 6;

// Proses perhitungan
$hasil = rumusKuadrat($a, $b, $c);
$discriminant = hitungDiscriminant($a, $b, $c);

// Output hasil
echo "<h1>Rumus Kuadrat (ABC)</h1>\n";
echo "<hr>\n";
echo "<h2>Rumus: x = (-b ± √(b² - 4ac)) / 2a</h2>\n";
echo "<p><strong>Persamaan:</strong></p>\n";
echo "<h3>{$a}x² ";
echo ($b >= 0) ? "+ {$b}x " : "{$b}x ";
echo ($c >= 0) ? "+ {$c} = 0" : "{$c} = 0";
echo "</h3>\n";

echo "<p><strong>Koefisien:</strong></p>\n";
echo "a = {$a}<br>\n";
echo "b = {$b}<br>\n";
echo "c = {$c}<br>\n";

echo "<p><strong>Perhitungan Discriminant (Δ):</strong></p>\n";
echo "Δ = b² - 4ac<br>\n";
echo "Δ = ({$b})² - 4({$a})({$c})<br>\n";
echo "Δ = " . pow($b, 2) . " - " . (4 * $a * $c) . "<br>\n";
echo "Δ = {$discriminant}<br>\n";

echo "<p><strong>Analisis:</strong></p>\n";
if ($discriminant < 0) {
    echo "Δ < 0 → Tidak ada akar real<br>\n";
} elseif ($discriminant == 0) {
    echo "Δ = 0 → Satu akar real (akar kembar)<br>\n";
} else {
    echo "Δ > 0 → Dua akar real berbeda<br>\n";
}

echo "<p><strong>Hasil:</strong></p>\n";
echo "<h3>Status: {$hasil['status']}</h3>\n";

if ($hasil['akar'] != null) {
    if (count($hasil['akar']) == 1) {
        echo "x = " . number_format($hasil['akar'][0], 2) . "<br>\n";
    } else {
        echo "x₁ = " . number_format($hasil['akar'][0], 2) . "<br>\n";
        echo "x₂ = " . number_format($hasil['akar'][1], 2) . "<br>\n";
        
        // Verifikasi hasil
        echo "<p><strong>Verifikasi:</strong></p>\n";
        $x1 = $hasil['akar'][0];
        $x2 = $hasil['akar'][1];
        
        $check1 = $a * pow($x1, 2) + $b * $x1 + $c;
        $check2 = $a * pow($x2, 2) + $b * $x2 + $c;
        
        echo "Untuk x₁ = " . number_format($x1, 2) . ":<br>\n";
        echo "{$a}(" . number_format($x1, 2) . ")² + {$b}(" . number_format($x1, 2) . ") + {$c} = " . number_format($check1, 4) . "<br>\n";
        echo "Untuk x₂ = " . number_format($x2, 2) . ":<br>\n";
        echo "{$a}(" . number_format($x2, 2) . ")² + {$b}(" . number_format($x2, 2) . ") + {$c} = " . number_format($check2, 4) . "<br>\n";
    }
}

// Contoh dengan nilai lain
echo "<hr>\n";
echo "<h2>Contoh Lain:</h2>\n";
$contoh_data = [
    [1, -3, 2],    // x² - 3x + 2 = 0
    [1, -4, 4],    // x² - 4x + 4 = 0
    [1, 0, -4],    // x² - 4 = 0
    [2, 3, 5],     // 2x² + 3x + 5 = 0
    [1, -6, 9]     // x² - 6x + 9 = 0
];

echo "<table border='1' cellpadding='5'>\n";
echo "<tr><th>Persamaan</th><th>Discriminant</th><th>Status</th><th>Akar-akar</th></tr>\n";
foreach($contoh_data as $data) {
    $a_val = $data[0];
    $b_val = $data[1];
    $c_val = $data[2];
    $result = rumusKuadrat($a_val, $b_val, $c_val);
    
    // Format persamaan
    $persamaan = "{$a_val}x² ";
    $persamaan .= ($b_val >= 0) ? "+ {$b_val}x " : "{$b_val}x ";
    $persamaan .= ($c_val >= 0) ? "+ {$c_val} = 0" : "{$c_val} = 0";
    
    // Format akar-akar
    $akar_str = "";
    if ($result['akar'] != null) {
        if (count($result['akar']) == 1) {
            $akar_str = "x = " . number_format($result['akar'][0], 2);
        } else {
            $akar_str = "x₁ = " . number_format($result['akar'][0], 2) . "<br>x₂ = " . number_format($result['akar'][1], 2);
        }
    } else {
        $akar_str = "-";
    }
    
    echo "<tr><td>{$persamaan}</td><td>{$result['discriminant']}</td><td>{$result['status']}</td><td>{$akar_str}</td></tr>\n";
}
echo "</table>\n";
?>