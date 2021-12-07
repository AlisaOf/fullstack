<?php

$number = 4;

if ($number > 5) {
    echo 'число больше 5';
    echo '<br>';
    echo '!';
}

echo '<br>';
echo 'Эта строка выводится всегда';

if ($number > 5) {
    echo '<br>';
    echo 'число больше 5';
} else {
    echo '<br>';
    echo 'число меньше или равно 5';
}

if ($number > 5) {
    echo '<br>';
    echo 'число больше 5';
} else if ($number > 3) {
    echo '<br>';
    echo 'число меньше или равно 5, но больше 3';
} else if ($number >  0) {
    echo '<br>';
    echo 'либо 1, либо 2, либо 3';
} else { 
    echo '<br>';
    echo '0 либо отрицательное число';
}

$second_number = 1;

echo '<hr>';

if ($number > 0 and $second_number == 0) {
    echo '$number > 0 и $second_number равно 0';
}

if ($number > 0 or $second_number == 0) {
    echo '$number > 0 или $second_number равно 0';
}

echo '<br>';

if ($number > 0) {
    if ($number > 2) {
       echo 'число больше 2';
    }
}

if ( $number != 0) {
    echo '<br>';
    echo 'число не 0';
}

echo '<hr>';

$age = 11;

if ($age < 7) {
echo 'Вы - дошкольник';
} 
if ($age > 6 and $age < 19) {
     echo 'Вы в школе';
}
 if ($age > 18) {
    echo 'Вы закончили школу';
}

// но правильнее так 

echo '<hr>';

$age = 11;

if ($age < 7) {
echo 'Вы - дошкольник';
}  else if ($age > 6 and $age < 19) {
     echo 'Вы в школе';
} else {
    echo 'Вы закончили школу';
}



