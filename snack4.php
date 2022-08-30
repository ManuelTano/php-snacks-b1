<!-- SNACK 4 (BONUS)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. -->

<?php

    $randomNum = [];

    while (count ($randomNum) < 15) {

        $number = rand(1, 99);

        if (!in_array($number, $randomNum)) {
            $randomNum[] = $number;
        }
    } 

    var_dump($randomNum);
?>