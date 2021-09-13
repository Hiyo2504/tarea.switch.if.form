<?php
$nombre1 = $_POST['nombre1'];
echo "Nombre: ";
echo   $nombre1;

$edad1 = $_POST['edad1'];
echo " <br> edad: ";
echo $edad1;

$nombre2 = $_POST['nombre2'];
echo "<br>Nombre: ";
echo   $nombre2;

$edad2 = $_POST['edad2'];
echo "<br> edad: ";
echo $edad2;


 
if ($edad1 >= $edad2) {
    echo "<br>";
    echo $nombre1 ;
    echo"   es Mayor de que ";
    echo $nombre2;
} else {
echo"<br>";
echo $nombre1;
    echo " es menor que ";
    echo $nombre2;

       
    
}
#if($edad1 == $edad2){
 #   echo"<br>";
  #  echo $nombre1;
   # echo " es de la mimsa edad que ";
    #echo $nombre2;

?>