<?php
 
 $operacion = $_POST ['lista'];

 switch ($operacion)

 {
     case 'sumar':

      

    echo "El resultado de la operacion es: ";
    echo $_POST ['numero1'] + $_POST['numero2'] + $_POST ["numero3"];
    break;
 }






?>