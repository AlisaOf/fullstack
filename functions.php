<?php

function sayHello () {
    echo 'Hello<br>';
}

function plusOne ($a) {
    echo ++$a . '<br>';
}
sayHello();

echo 'Hi!<br>';

sayHello();

sayHello();

plusOne(55);

$number = 18;
plusOne($number);


function multiplay ($a, $b) {
    echo $a * $b . '<br>';
}

function sumNumbers ($a, $b, $c = 0) {
    echo $a + $b + $c . '<br>';
}

multiplay(10, 5);

sumNumbers(1, 2, 3);
sumNumbers (1, 2);


function returnPlusOne ($a) {
    return ++$a;
}

returnPlusOne($number);
$result = returnPlusOne($number);
echo "Результат: $result <br>";


$numbers = [1, 5, 3, 7, 2, 4];

function maxNumber (array $numbers) {
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
} return $max;

function sumArray (array $numbers) {
    $res = 0; 
    foreach ($numbers as $number) {
        $res += $number;
    }
    return $res;
}

echo maxNumber($numbers) . '<br>';
echo max($numbers) . '<br>';

