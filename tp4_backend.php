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
echo " <strong> <p> ejercicio numero 1</p></strong>";
$matriz = [];
for ($i=2; $i <=20; $i+=2) { 
    $matriz [] = $i ;
}
foreach ($matriz as $value) {
    print "<p> $value </p>";
}
echo " <strong> <p> ejercicio numero 2</p></strong>";
$ejercicio2 = ["Pedro", "Ana" , 34 , 1];
print_r ($ejercicio2);
echo " <strong> <p> ejercicio numero 3</p></strong>";
$ejercicio3 =['Nombre'=> "Pedro", 'Apellido'=> "Torres", 'Direccion'=> "Av. Mayor 3703", 'Telefono'=>" 1122334455"];
//print_r ($ejercicio3);
echo " <strong> <p> ejercicio numero 4</p></strong>";
$ejercicio4 = ["Madrid", "Barcelona","Londres", "New York", "Los Angeles", "Chicago"];
foreach ($ejercicio4 as $key => $value) {
echo"<p>La ciudad con el indice $key tiene el nombre $value</p> "; 
}
 echo " <strong> <p> ejercicio numero 5 </p></strong>";
 $ejercicio5 = ['MD'=>"Madrid",'BCL'=>"Barcelona",'LD'=>"Londres", 'NY'=>"New York",'LA'=>"Los Angeles",'CCG'=>"Chicago"];
 foreach ($ejercicio5 as $key => $value) {
    echo "<p>El indice de $value es $key </p>";
 }

?>
  
</body>
</html>
