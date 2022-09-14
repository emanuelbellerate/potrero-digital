<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend</title>
</head>
<body>
  
    <?php
     $n = 4 ;
   if ($n > 0) {
    echo "$n es un numero positivo";
   }else {
    echo "$n no es un numero positivo";}
   ?><br><hr> <?php
if (($n > 1 )&& ($n < 10)) {
    echo "$n es mayor a 1 y menor a 10";}
    else {
        "$n no es mayor a 1 ni menor a 10";
    }?>
<br><hr>
<?php
if (($n > 10) || ($n < 2)) {
    echo "$n es mayor a 10 o menor a 2";}
    else { echo "$n no es ni mayor a 10 ni menor que 2";
}?>
<br><hr>
<?php
$numero1 = 4;
$numero2 = 5;
$suma = $numero1 +$numero2 ;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = floor($numero1 / $numero2);
$resto = $numero1 % $numero2;
if ($numero1 > $numero2) {
    echo "la suma de $numero1 y $numero2 es $suma"." y la resta de $numero1 y $numero2 es $resta";
}elseif ($numero2 > $numero1) {
    echo "La multiplicacion de $numero1 y $numero2 da como resultado $multiplicacion ."." la division de $numero1 / $numero2 da como resultado $division .". " el resto de la division de $numero1 / $numero2 da $resto";
} else {
    echo "los numeros ingresados son iguales";
}
?>


</body>
</html>