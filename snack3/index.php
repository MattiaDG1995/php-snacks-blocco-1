<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'luca laurenti',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'paolo bitta',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'luca nervi',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'pippo baudo',
            'text' => 'Testo post 4'
        ],

        [
            'title' => 'Post 5',
            'author' => 'harry potter',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'frodo beggins',
            'text' => 'Testo post 6'
        ]
    ],
];
 
/* $keys = array_keys($posts);
for($i = 0; $i < count($posts); $i++) {
    echo $keys[$i] . "<br>";
    foreach($posts[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
} */
$keys = array_keys($posts);
for ($i = 0; $i < count($posts); $i++) {
    echo $keys[$i];
    for ($x = 0; $x < count($keys[$i]); $x++) {
      echo $posts[$i][$x];
    };
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


</body>
</html>