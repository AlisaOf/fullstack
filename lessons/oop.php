<?php

class Car {

    public $brand;
    public $model;
    public $year;

    public function __construct($b, $m, $y) {
        $this->brand = $b;
        $this->model = $m;
        $this->year = $y;
    }
    
    public function drive () {
        echo "$this->brand $this->model ($this->year) driving<br>";
    }
}

$audi = new Car('Audi', 'Q5', 2021);
$vesta = new Car('Lada', 'Vesta', 2020);

$vesta->year = 2016;

$car->drive();
$new_car->drive();


function binaryArrayToNumber ($arr) {
    $res = 0;
    $count = count($arr) - 1;
    foreach ($arr as $n) {
        $res += $n *(2 ** $count--);
    }
 return $res;
}

echo '<br>';
echo binaryArrayToNumber([1, 0, 1, 1]);

