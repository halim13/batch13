<?php
function thirdHighest($arr)
{
    if (is_array($arr)) {
        if (count($arr) > 2) {
            rsort($arr);
            echo $arr[2];
        } else {
            echo 'Minimal array length is 3!';
        }
    } else {
        echo 'Parameter should be an array!';
    }
}

thirdHighest([1, 2, 3, 4, 5, 6]);
