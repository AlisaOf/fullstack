<?php

$name = "Alisa";
$age = 33;

echo $name;
echo "<br>";
echo $age;
// вот так (как внизу) делать не нужно)
$name2 = 'Andrew';
echo "<br>";
echo $name2;


$lastName = "Ofitserova";
echo "<br>";
$last_name = "Ofitserova";
echo "<br>";
echo $lastName;
echo "<br>";
echo $last_name;
/**
 * многострочные
 * комментарий
 * трутру
 * х)
 */

 $fullName = $name . ' ' . $lastName;
 echo "<br>";
 echo $fullName;
 echo "<br>";
 $word = 'lower_case';
 $word = strtoupper ($word);
 echo "<br>";
 echo $word;
 echo "<br>";
 $upperCase = 'UPPER_CASE';
 $upperCase = strtolower($upperCase);
 echo "<br>";
 echo $upperCase;

 echo "<br>";
$password = 'qwerty';
echo "<br>";
echo '!' . $password .'!';
echo "<br>";
echo trim($password);

$number = 5*5;
echo "<br>";
echo $number * 2;

echo "<br>";



$hamburger = 4.95;
$cocktail = 1.95;
$coca = 0.85;
$chaevie = 0.16;
$nds = 0.075;
$eda = $hamburger * 2 + $cocktail + $coca;
echo "<br>";
echo $eda;

$na_chai = $eda * $chaevie;
echo "<br>";
echo $na_chai;
$nds_cheka = ($na_chai + $eda) * $nds;
echo "<br>";
echo $nds_cheka;

$itogo = ($na_chai + $eda + $nds_cheka);
echo "<br>";
echo $itogo;
