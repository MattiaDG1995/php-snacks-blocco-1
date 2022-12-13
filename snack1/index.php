<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
    [
        "casa"=>"milano",
        "ospite"=>"cantù",
        "punticasa"=>"55",
        "puntiospite"=>"60"
    ],
    [
        "casa"=>"napoli",
        "ospite"=>"bari",
        "punticasa"=>"30",
        "puntiospite"=>"40"
    ],
    [
        "casa"=>"roma",
        "ospite"=>"genova",
        "punticasa"=>"25",
        "puntiospite"=>"35"
    ]
    ];

    for($i=0; $i<count($partite); $i++){
        echo $partite[$i]["casa"] . "-" . $partite[$i]["ospite"] . "-" . $partite[$i]["punticasa"] . "-" . $partite[$i]["puntiospite"];
        echo "<br>";
    }
?>