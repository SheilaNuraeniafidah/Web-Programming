<?php
echo "<table border='1' cellspacing='0' cellpadding='5'>";  // Membuat tabel dengan border dan padding

for ($i = 1; $i <= 5; $i++) {  // Loop untuk baris (5 baris)
    echo "<tr>";  // Membuka baris baru
    for ($j = 1; $j <= 6; $j++) {  // Loop untuk kolom (6 kolom)
        $total = $i + $j;  // Menghitung jumlah baris + kolom

        // Jika jumlahnya genap, beri warna background merah
        if ($total % 2 == 0) {
            echo "<td style='background-color: red;'>elemen $i - $j</td>";
        } 
        // Jika jumlahnya ganjil, beri warna font merah
        else {
            echo "<td><span style='color: red;'>elemen $i - $j</span></td>";
        }
    }
    echo "</tr>";  // Menutup baris
}

echo "</table>";  // Menutup tabel
?>
