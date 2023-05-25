<?php 
//include
//require
//include_once
//require_once
    require_once 'oopbasics.php';
    $reposteria = array();
    $reposteria[] = new Producto('R001', 30, 'Flan de Queso');
    $reposteria[] = new Producto('R001', 50, 'Flan de Coco');
    $reposteria[] = new Producto('R001', 80, 'Flan Imposible');

    $miOrden = new Orden($bebida[1], $reposteria[0]);
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
    <?php
    foreach($reposteria as $producto){
        echo $producto->getNombre() . " " . $producto ->getPrecio() . "<br/>" 
    }
    echo '<hr/>';
    echo $miOrden->getTotal();
    ?>
</body>
</html>