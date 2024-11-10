<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <h1>Bilangan Prima dari 0 sampai 100</h1>
    <ul>
        <?php
        $primeCount = 0;
        for ($i = 0; $i <= 100; $i++) {
            $isPrime = true;

            if ($i < 2) {
                $isPrime = false;
            }

            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break;
                }
            }

            if ($isPrime) {
                echo "<li>$i</li>";
                $primeCount++;
            }
        }
        ?>
    </ul>

    <p>Jumlah bilangan prima dari 0 sampai 100 adalah: <strong><?php echo $primeCount; ?></strong></p>
</body>
</html>