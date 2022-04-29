<?php 

    class Prueba {
        public $x = 1;
        public $y = 2;
    }

    $saludo = "<h1>Hola Mundo</h1>";

    $otro_saludo = "<h2>Este es otro saludo</h2>";

    $obj = new Prueba; 

    // var_dump($obj);

    // echo $obj->y + $obj->x;
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
    <?php include('banner.php') ?>
    <?php
        echo $saludo;
    ?>
    <a href="pag1.php">Página 1</a>
</body>
</html>