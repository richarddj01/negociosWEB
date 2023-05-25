<?php
    session_start();
    $ordenes = array();
    if(isset($_SESSION["ordenes"])){
        $ordenes = $_SESSION["ordenes"];
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
    <h1>Listado de Ordenes</h1>
    <?php echo json_encode($ordenes, JSON_PRETTY_PRINT, 5); ?>
</body>
</html>