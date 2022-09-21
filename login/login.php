<?php
$usuario= $_POST[ "name"];
$constraseña= $_POST["pass"];

$ckusuario ="emanuel";
$ckcontraseña ="1234";

if ($usuario == $ckusuario && $constraseña == $ckcontraseña){
    header ("location:https://www.lubricantessanlorenzo.com/website");

} else {
    header ("location: error.html");
}
?>