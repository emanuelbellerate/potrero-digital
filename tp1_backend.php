<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp1_backend.php</title>
</head>
<body>

        <?php

        echo "hola mundo";
        ?>
        <br>
        <hr>
    <?php
        $saludo = "hola mundo";
        echo $saludo; 
    ?>
    <br>
    <hr>
    <?php
        $numero1 = 10;
        $numero2 = 20;

        echo "la suma de 10 + 20 es = " . ($numero1 + $numero2);
        ?>
        <br>
        
    <?php   
        echo "la resta de 20 - 10 es = ". ($numero2 - $numero1);
        ?>
        <br>
        
    <?php    
        echo "la multiplicacion de 10 * 20 es = ". ($numero1 * $numero2);
        ?>
        <br>
        
    <?php    
        echo "la division de 20 / 10 es = " . $numero2 / $numero1;
        ?>
        <br>
        
    <?php    
        echo "el resto de 20 / 10 es = "  . $numero2 % $numero1;
        ?>
        <br>
        <hr>
    <?php  
    $celsius = 20;
    echo "si pasamos 20 grados celsius a  Fahrenheit es " . $celsius *9/5 +32; 
    ?>
    <br>
    <hr>
    <?php  
    $ladorectangulo1 = 18;
    $ladorectangulo2= 12;
    echo "si la base de un rectangulo es de 18cm y su altura es de 12cm";
    ?>
    <br>
    
    <?php
    echo "su perimetro es " . 2*($ladorectangulo1+$ladorectangulo2)."cm";
    
    ?>
    <br>
    <?php 
    echo "su area es ". $ladorectangulo1 * $ladorectangulo2 ."cm";
    
    ?>
    <br>
    <hr>
    <?php 
    $radio = 30;
    $pi = 3.1416;
    echo "si el radio de un circulo es de 30cm ";
    ?>
    <br>
    <?php 

    echo "su perimetro es de " .($radio *2) *$pi;
    ?>
    <br>
    
    <?php 
    echo "su area es de ". ($radio* $radio)  * $pi;
    ?>
</body>
</html>

