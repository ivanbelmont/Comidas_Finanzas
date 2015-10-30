hola
<?php 

include 'conexion.php' ;
conectar(1);

$checkbox=$_GET['checkbox'];
$fechas=$_GET['fechas'];

for ($i=0; $i <count($checkbox) ; $i++) {

echo $checkbox[$i]; 
echo $fechas[$i];
}


$sql="SELECT * FROM comida where id= ".$checkbox[1];

mysql_query($sql);
?>