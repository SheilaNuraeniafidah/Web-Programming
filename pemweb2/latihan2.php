<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
    <?php 
        $harga = [90_000, 100_000, 2_000_000];
        foreach ($harga as $value) :
            $kategori = "";
            if($value >= 1_000_000):
                $kategori = "Mahal";
            elseif ($value >= 100_000):
                $kategori = "Normal";
            else:
                $kategori = "Murah";
            endif;
        ?>
        <p>Barang dengan harga Rp<?= number_format($value, 2, ",", ".")?> adalah kategori barang <?= $kategori?></p>
    <?php endforeach?>
    
</body>
</html>