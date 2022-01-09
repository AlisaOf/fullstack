<?php

$number = 1;

while ($number < 10) {
    echo $number . '<br>';
    //$number = $number +1;
    // $number += 1;
    $number++;
}

echo '<select>';
//echo '<option selected disabled>--'
for ($i = 1; $i < 10; $i++) {
    echo "<option>$i</option>";
}
echo '</select>';

echo '<hr>';

$F = -50;

while ($F < 51) {
    $C = round (($F - 32) * 5/9, 2);
    echo $F . '='. $C . '<br>';
    $F += 1; 
}



