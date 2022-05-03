<?php

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];


if(strlen($name)>3 && strpbrk($email,"@") && strpbrk($email,".") && is_numeric($age))
{
    echo("Accesso consentito");
}
else{
    echo("Accesso non consentito");
}

?>