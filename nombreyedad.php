<?php 

$nombre = '';
$apellido = '';
$edad = 0;
$resultado ='';

if(isset($_POST['btnAceptar'])){ //isset se utiliza para ver si hay alguna variable en memoria, ver que exista la variable y que esté declarada
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $edad = $_POST["txtEdad"];
    $resultado = 'Su nombre completo es: ' . $nombre . ' ' . $apellido . ' y su edad es: ' . $edad;
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
    <h1>Nombre Completo y Edad</h1>
    <form action="nombreyedad.php" method="post">
        <label for="txtNombre">Nombre</label>
        <input type="text" name="txtNombre" id="txtNombre" value="<?php echo $nombre?>">
        <br>
        <label for="txtApellido">Apellido</label>
        <input type="text" name="txtApellido" id="txtApellido" value="<?php echo $apellido;?>">
        <br>
        <label for="txtEdad">Edad</label>
        <input type="text" name="txtEdad" id="txtEdad" value="<?php echo $edad;?>">
        <br>
        <button type="submit" name="btnAceptar">Aceptar</button>
    </form>
    <br>
    <section>
    <?php
    echo $resultado
    ?> 
    </section>
</body>
</html>