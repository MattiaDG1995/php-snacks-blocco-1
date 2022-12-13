<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php 
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];
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

    <form action="" method="GET">
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="email" name="email">
        <input type="number" placeholder="age" name="age">

        <button type="submit">start</button>
    </form>

    <?php
    if(strlen($name) > 3 && strpos($email, ".") !== false && strpos($email, "@")  !== false && is_numeric($age) ){
        echo ("riuscito");

    }else{

        echo ("negato");
    }

    ?>

</body>
</html>