<?php

$name = 'Alisa';
echo $name . ' ' . gettype($name) . ' ' . '<br>';

$age = 33;
echo $age . ' ' . gettype($age) . ' ' . '<br>';

$money = 1000.00;
echo $money . ' ' . gettype($money) . ' ' . '<br>';

$isRain = true; 
echo $isRain . ' ' . gettype($isRain) . ' ' . '<br>';

echo $notExist . ' ' . gettype($notExist) . ' ' . '<br>';

echo '<hr>';

if ($name) {
    echo '$name true <br>';
} else {
    echo '$name false <br>';
}

$emptyString = '';

if ($emptyString) {
    echo '$emptyString true <br>';
} else {
    echo '$emptyString false <br>';
}


$number = 99;

if ($number) {
    echo '$number true <br>';
} else {
    echo '$number false <br>';
}

$zero = 0;

if ($zero) {
    echo '$zero true <br>';
} else {
    echo '$zero false <br>';
}

echo "My name's Alisa <br>";
echo 'My name\'s Alisa <br>';

$message = "значение переменной name = $name";
echo "$message";
echo '<hr>';

$n = -1;

if (++$n) {
    echo 'true';
} else {
    echo 'false';
}
echo '<hr>';

$n = 10;
echo $n;
echo '<hr>';
$n *= 2;
echo $n;
echo '<hr>';

$name = 'Alisa';
$name .= 'Ofitserova';
echo $name;
