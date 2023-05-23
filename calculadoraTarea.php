<?php 
$numero1 = 0;
$numero2 = 0;
$resultado = 0;
$operacion = '';

if(isset($_POST['btnAdd'])){ //isset se utiliza para ver si hay alguna variable en memoria, ver que exista la variable y que esté declarada
    $numero1 = floatval($_POST["txtNumero1"]);
    $numero2 = floatval($_POST["txtNumero2"]);
    $resultado = $numero1 + $numero2;
    $operacion = 'suma';
}
if(isset($_POST['btnSub'])){
    $numero1 = floatval($_POST["txtNumero1"]);
    $numero2 = floatval($_POST["txtNumero2"]);
    $resultado = $numero1 - $numero2;
    $operacion = 'resta';
}
if(isset($_POST['btnMult'])){
    $numero1 = floatval($_POST["txtNumero1"]);
    $numero2 = floatval($_POST["txtNumero2"]);
    $resultado = $numero1 * $numero2;
    $operacion = 'multi';
}
if(isset($_POST['btnDiv'])){
    $numero1 = floatval($_POST["txtNumero1"]);
    $numero2 = floatval($_POST["txtNumero2"]);
    $resultado = $numero1 / $numero2;
    $operacion = 'division';
}
if(isset($_POST['btnFact'])){ //Falta este
    $numero1 = floatval($_POST["txtNumero1"]);
    $numero2 = floatval($_POST["txtNumero2"]);
    $resultado = $numero1 + $numero2;
    $resultado = factorial($resultado);
    $operacion = 'factorial';
}
function factorial($resSuma) {
    if ($resSuma != 0) {
        return $resSuma * factorial($resSuma - 1);
    } else {
        return 1;
    }
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
    <h1>Calculadora</h1>
    <form action="calculadoraTarea.php" method="post">
        <label for="txtNumero1">Número 1</label>
        <input type="number" name="txtNumero1" id="txtNumero1" value="<?php echo $numero1;?>">
        <br>
        <label for="txtNumero2">Número 2</label>
        <input type="number" name="txtNumero2" id="txtNumero2" value="<?php echo $numero2;?>">
        <br>
        <button type="submit" name="btnAdd">Sumar</button>
        <button type="submit" name="btnSub">Restar</button>
        <button type="submit" name="btnMult">Multiplicar</button>
        <button type="submit" name="btnDiv">Dividir</button>
        <button type="submit" name="btnFact">Factorial de la Suma</button>
    </form>
    <?php if ($resultado >0) {  //Aquí se abre el php?> 
    <section>
        <br>
        <?php 
            echo "La " . $operacion . " de ". $numero1 . " y " . $numero2 . " es igual a " . $resultado; //El punto sirve para concatenar
        ?>
    </section>
    <?php } ?>
</body>
</html>