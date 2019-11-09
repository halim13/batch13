<?php
function createMatrix($jumlah)
{
    echo "Jumlah array = " . $jumlah . "<br>";
    $arr = [];
    $total = 0;
    $angkanya = 0;
    $angkanya2 = 0;

    for ($i = 0; $i < $jumlah; $i++) {
        for ($j = 0; $j < $jumlah; $j++) {
            echo $arr[$i][$j] = rand(1, 9);
        }
        echo "<br>";
    }

    $panjang = $jumlah - 1;

    for ($i = 0; $i < $jumlah; $i++) {
        for ($j = 0; $j < $jumlah; $j++) {
            if ($i == $angkanya && $j == $angkanya) {
                $total += $arr[$i][$j];
                $angkanya += 1;
            }
            if ($i == $angkanya2  && $j == $panjang) {
                $total += $arr[$i][$j];
                $angkanya2 += 1;
                $panjang -= 1;
            }
        }
    }


    echo "Total = " . $total;
}

createMatrix(4);
