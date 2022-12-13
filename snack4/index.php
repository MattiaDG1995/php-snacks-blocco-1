<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

 function RandNumber($count){
    $array = [];
    for($i = 0; $i < $count; $i++) {
        $rand = rand(1, 15);
        if(!in_array($rand, $array)){
            echo $array[] = $rand, "<br>";
        }else{
            $i--;
        };           
    };
};
$randomNumbersArray = RandNumber(15);
?>