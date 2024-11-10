<!DOCTYPE html>        
<html>
    <tittle> assignment 2</tittle> 
    <body>
        <h1>Nomor 2</h1>
        <!-- kalo menggunakan perulangan -->
                <!-- <?php
                $mahasiswa = [
                    ['nama' => 'Sulis', 'nim' => 'K3510001', 'alamat' => 'Solo', 'bidang' =>'RPL'],
                    ['nama' => 'rendi', 'nim' => 'K3510002', 'alamat' => 'klaten', 'bidang' => 'tkj'],
                    ['nama' => 'jatmiko', 'nim' => 'K3510003', 'alamat' => 'boyolali', 'bidang' => 'multimedia'],
                    ['nama' => 'feri', 'nim' => 'k3510004', 'alamat' => 'wonogiri', 'bidang' => 'RPL']
                ];

                foreach ($mahasiswa as $mhs) {
                echo "• " . $mhs['nama'] . " | " . $mhs['nim'] . " | " . $mhs['alamat'] . " | " . $mhs['bidang'] . "<br>";
                }

                ?> -->

            <?php
                // Menyimpan data mahasiswa dalam array
                $mahasiswa1 = ['nama' => 'Sulis', 'nim' => 'K3510001', 'alamat' => 'Solo', 'bidang' => 'RPL'];
                $mahasiswa2 = ['nama' => 'Rendi', 'nim' => 'K3510002', 'alamat' => 'Klaten', 'bidang' => 'TKJ'];
                $mahasiswa3 = ['nama' => 'Jatmiko', 'nim' => 'K3510003', 'alamat' => 'Boyolali', 'bidang' => 'Multimedia'];
                $mahasiswa4 = ['nama' => 'Feri', 'nim' => 'K3510004', 'alamat' => 'Wonogiri', 'bidang' => 'RPL'];

                // Menampilkan data satu per satu tanpa perulangan
                echo "• " . $mahasiswa1['nama'] . " | " . $mahasiswa1['nim'] . " | " . $mahasiswa1['alamat'] . " | " . $mahasiswa1['bidang'] . "<br>";
                echo "• " . $mahasiswa2['nama'] . " | " . $mahasiswa2['nim'] . " | " . $mahasiswa2['alamat'] . " | " . $mahasiswa2['bidang'] . "<br>";
                echo "• " . $mahasiswa3['nama'] . " | " . $mahasiswa3['nim'] . " | " . $mahasiswa3['alamat'] . " | " . $mahasiswa3['bidang'] . "<br>";
                echo "• " . $mahasiswa4['nama'] . " | " . $mahasiswa4['nim'] . " | " . $mahasiswa4['alamat'] . " | " . $mahasiswa4['bidang'] . "<br>";
                ?>
    </body>
</html>  