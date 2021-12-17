<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php


function CreateArray($min, $max, $limit)
{
    $NumberArray = [];

    while (count($NumberArray) < $limit){

    $number = rand($min, $max);

        if(!in_array($number, $NumberArray)){
            $NumberArray[] = $number;
        }
    }
    return $NumberArray;
}

// var_dump(CreateArray(1,100,15));

$value = array_values(CreateArray(1,100,15));

for ($i=0; $i < count($value) ; $i++) { 
    echo 'numero: '.$value[$i].'<br>';
};
?>