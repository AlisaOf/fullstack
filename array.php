<?php

$numbers = [1, 2, 3, 4, 5];

echo $numbers[2];
echo '<br>';

$count = count($numbers);

for ($i = 0; $i < $count; $i++) {
   echo "$i $numbers[$i] <br>";
}


echo '<hr>';

foreach ($numbers as $numbers) {
    echo "$numbers <br>";
}

$new_numbers = [];

 for ($i = 0; $i < 10; $i++){
     $new_numbers[] = $i ** 2;
 }

$new_numbers[3] = 99;
$new_numbers[10] = 100;

$new_numbers[67] = 67 * 67;

 echo '<pre>';
 print_r($new_numbers);

 echo '<hr>';

 $person = [
     'name' => 'Alisa',
     'age' => 33,
     'city' => 'London',
     'language' => 'PHP'
 ];

echo $person['name'];

echo '<hr>';

$person = [
    'name' => 'Alisa',
    'age' => 33,
    'city' => 'London',
    'language' => 'PHP'
];

echo '<pre>';
print_r($person);

$person['name'] = ' ';

echo '<pre>';
print_r($person);

unset($person['name']);

echo '<pre>';
print_r($person);
