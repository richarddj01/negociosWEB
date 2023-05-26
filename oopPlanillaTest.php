<?php
require_once 'oopPlanilla.php';

//Primero vamos a establecer la cadena de responsabilidad
$Planilla = new SalaryToPay(new CommissionsToPay(null));

echo $Planilla->process(100);
?>