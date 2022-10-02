<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>TRABAJO PRACTICO NUMERO 3</title>
</head>
<body>
<?php
echo "<strong>Ejercicio N° 1 </strong> <br>";

for ($i=1;$i< 101; $i++) { 
    echo " $i";
}
echo "<br><strong> Ejercicio N°2</strong><br>";
for ($i=100; $i > 0 ; $i--) { 
     echo " $i ";
}
echo " <br> <strong> Ejercicio N°3</strong> <br>";
for ($i=2; $i <101; $i+=2) { 
    echo " $i";
}
echo " <br> <strong> Ejercicio N°4</strong> <br>";
for ($i=1; $i <101; $i+=2) { 
    echo " $i";
}
echo "<br><strong> Ejercicio N° 5</strong><br>";
$numero = 0;
for ($i=1; $i < 21; $i++) { 
    $numero +=$i ;
}
echo "la suma de los numeros del 1 al 20 es $numero ";
echo "<br><strong> Ejercicio N° 6</strong><br>";
$numeropar = 0;
for ($i=2; $i < 21; $i+=2) { 
    $numeropar +=$i ;
}
echo "la suma de los numeros pares del 1 al 20 es $numeropar ";

?>
</body>
</html>