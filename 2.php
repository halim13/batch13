<?php
function username($username)
{
    if ($username || preg_match("/^[a-z.]*$/", $username) && strlen($username) > 4) {
        echo "true";
    } else {
        echo "false";
    }
}
function password($password)
{
    $pregpassword1 = preg_match("/^[A-Z0-9@]*$/", $password);
    $pregpassword2 = preg_match("/^[A-Z0-9&]*$/", $password);
    if ($pregpassword1) {
        simbol("@", $password);
    } else if ($pregpassword2) {
        simbol("&", $password);
    } else {
        echo "false";
    }
}

function simbol($simbolnya, $password)
{
    $pecah = explode($simbolnya, $password);

    $pregpassword1sebelum = preg_match("/^[0-9]*$/", $pecah[0]);
    $pregpassword1setelah = preg_match("/^[A-Z]*$/", $pecah[1]);

    $panjangsebelum = strlen($pecah[0]);
    $panjangsetelah = strlen($pecah[1]);

    if ($panjangsebelum == 2 && $panjangsetelah == 4 && $pregpassword1sebelum && $pregpassword1setelah) {
        echo "true";
    } else {
        echo "false";
    }
}

username("arkademy");
echo "<br/>";
password("29@PASS");
