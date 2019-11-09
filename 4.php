<?php
function printWords($kata)
{
    $data1 = "";
    $data2 = "";

    $pisah = str_split($kata);

    for ($i = 0; $i < count($pisah); $i++) {
        if (
            $pisah[$i] == 'a' || $pisah[$i] == 'i' || $pisah[$i] == 'u' || $pisah[$i] == 'e' || $pisah[$i] == 'o'
            || $pisah[$i] == 'A' || $pisah[$i] == 'I' || $pisah[$i] == 'U' || $pisah[$i] == 'E' || $pisah[$i] == 'O'
        ) {
            $data1 .= $pisah[$i];
        } else {
            $data2 .= $pisah[$i];
        }
    }

    echo $data1 . $data2;
}

printWords("ARKADEMY");
