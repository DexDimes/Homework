<?php

$numbers = [3, 8, 15, 22, 7, 10, 4];

 $count = count($numbers);

for ($i = 0; $i < $count; $i++) {
    if ($numbers[$i] % 2 === 0) {

        echo $numbers[$i] . '<br>';
        
    }
}