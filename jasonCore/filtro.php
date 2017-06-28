<?php

$original = '@#$@#$PAULO!@#!@#@!';

$substituto = preg_replace("/[^a-z]/i", "", $original\);

echo $original . "<br>";
echo $substituto . "<br>";


?>