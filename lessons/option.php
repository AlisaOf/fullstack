<?php

function piusOne ($a) {
    $a = $a + 1;
}

$a = 10;
echo "$a<br>";
plusOne ($a);
echo "$a<br>";

function plusOne ($a) {
    $a = $a + 1;
    return $a; 
}

//как внизу делать не надо. 
//Внутри функции ничего глобально менять не нужно.

function wrongPlusOne () {
    global $a;
    $a = $a + 1;
}