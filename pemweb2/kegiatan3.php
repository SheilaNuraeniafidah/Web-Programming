<?php
    function bubbleSort($arr) {
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    // Swap elemen
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        return $arr;
    }
    function quickSort($arr) {
        if (count($arr) < 2) {
            return $arr;
        }
        $left = $right = array();
        $pivot = $arr[0];  // Pilih elemen pertama sebagai pivot
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] < $pivot) {
                $left[] = $arr[$i];
            } else {
                $right[] = $arr[$i];
            }
        }
        // Gabungkan hasil quicksort pada sub-array
        return array_merge(quickSort($left), array($pivot), quickSort($right));  
    } 

    function insertionSort($arr) {
        $n = count($arr);
        for ($i = 1; $i < $n; $i++) {
            $key = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] > $key) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $key;
        }
        return $arr;
    }

    $arr = array(64, 34, 25, 12, 22, 11, 90);

    // Bubble Sort
    $bubbleSorted = bubbleSort($arr);
    print_r($bubbleSorted);

    // Quick Sort
    $quickSorted = quickSort($arr);
    print_r($quickSorted);

    // Insertion Sort
    $insertionSorted = insertionSort($arr);
    print_r($insertionSorted);
?>
