<?php

$original = '@#$1111@#$PAULOsergioÉÉÉÉ!@#!@#@!';

$substituto = preg_replace("/[^a-z-0-9]/i", "", $original);

echo $original . "<br>";
echo $substituto . "<br>";



if (preg_match("/^([a-zA-Z0-9]+)$/", $original)) {
    echo '<br>nome OK!';
}
else {
    echo '<br>Cadastro não realizado! O nome de login tem caracteres inválidos. Use somente letras e números';
}

echo "<hr>";

$string = "texto com aspas simples 'teste'";
$filtra = str_replace("'", '`', $string);

echo $filtra;


?>