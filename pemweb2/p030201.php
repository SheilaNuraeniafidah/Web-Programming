<?php
echo "<table border='1' cellspacing='0' cellpadding='5'>";  // Membuat tabel dengan border dan padding

for ($i = 1; $i <= 5; $i++) {  // Loop untuk baris (5 baris)
    echo "<tr>";  // Membuka baris baru
    for ($j = 1; $j <= 6; $j++) {  // Loop untuk kolom (6 kolom)
        echo "<td>elemen $i - $j</td>";  // Mengisi sel dengan teks
    }
    echo "</tr>";  // Menutup baris
}

echo "</table>";  // Menutup tabel
?>
