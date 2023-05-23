<?php
$arrBebidasCalientes = array(
    "0001" => array(
        "sku"=> "0001",
        "nombre" => "Cafe Americano 12 oz",
        "precio" => 30.00,
    ),
    "0002" => array(
        "sku"=> "0002",
        "nombre" => "Cafe Americano 16 oz",
        "precio" => 50.00,
    ),
    "0003" => array(
        "sku"=> "0003",
        "nombre" => "Capuccino 16 oz",
        "precio" => 60.00,
    ),
);
$arrReposteria = array(
    "R0001" => array(
        "sku"=> "R0001",
        "nombre" => "Pastelito de piña",
        "precio" => 50.00,
    ),
    "R0002" => array(
        "sku"=> "R0002",
        "nombre" => "Flan de Queso",
        "precio" => 50.00,
    ),
    "R0003" => array(
        "sku"=> "R0003",
        "nombre" => "Cheese Cake Ny de Fresa",
        "precio" => 60.00,
    ),
);

function generarComboBox($arrayToProcess, $valueField, $textField, $selectedValue, $name){
    $htmlBuffer = '<select name "'.$name.'">';

    foreach($arrayToProcess as $arrayItem){
        $htmlBuffer .= '<option value="' . $arrayItem[$valueField] . '"';
        $htmlBuffer .= ($arrayItem[$valueField] == $selectedValue) ? ' selected ': '';
        $htmlBuffer .= '>';
        $htmlBuffer .= $arrayItem[$textField];
        $htmlBuffer .= '</option>';
    }

    $htmlBuffer .= "</select>";
    return $htmlBuffer;
}

$bebidasSelectedSku = "002";
$reposteriaSelectedSku = 'R0003';
if(isset($_POST["btnOrdenar"])){
    $bebidasSelectedSku=$_POST["bebidasSelectedSku"];
    $reposteriaSelectedSku = $_POST["reposteriaSelectedSku"];
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
    <form action="muycafe.php" method="post">
    <label for="idCombo1">Bebidas</label>
    <?php echo generarComboBox($arrBebidasCalientes, "sku", "nombre", $bebidasSelectedSku,"bebidasSelectedSku"); ?>
    <br>
    <label for="idCombo2">Repostería</label>
    <?php echo generarComboBox($arrReposteria, "sku", "nombre", $reposteriaSelectedSku, "reposteriaSelectedSku"); ?>
    <br>
    <button type="submit" name="btnOrdenar">Ordenar</button>
    </form>
</body>
</html>