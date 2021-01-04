<?php 
/* 
Creare un array con 15 numeri casuali, tenendo conto che l’array non
dovrà contenere lo stesso numero più di una volta
*/

function createArrayOfRandom($min, $max, $numberItems)
{
    $newArray = [];

    while (count($newArray) < $numberItems) {
        $number = rand($min, $max);

        if (!in_array($number, $newArray)) {
            $newArray[] = $number;
        }
    }

    return $newArray;
};

$arrayRandom = createArrayOfRandom(1, 100, 15);

var_dump($arrayRandom);


?>