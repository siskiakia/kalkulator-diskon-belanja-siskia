<?php
// Fungsi untuk menghitung total belanja setelah diskon
function hitungTotalSetelahDiskon($total, $diskon) {
    return $total - ($total * $diskon);
}

// Inisialisasi variabel
$totalBelanja = 600000; // Ganti dengan total belanja dari input pengguna
$diskon = 0;

// Penerapan struktur kontrol untuk menentukan diskon
if ($totalBelanja > 500000) {
    $diskon = 0.1; // 10% diskon untuk belanjaan di atas Rp 500.000
}

// Menghitung total belanja setelah diskon menggunakan fungsi
$totalSetelahDiskon = hitungTotalSetelahDiskon($totalBelanja, $diskon);

// Menampilkan hasil
echo "Total belanja sebelum diskon: Rp", $totalBelanja, "<br>";
echo "Diskon yang diberikan: Rp", $totalBelanja * $diskon, "<br>";
echo "Total belanja setelah diskon: Rp", $totalSetelahDiskon;
?>
