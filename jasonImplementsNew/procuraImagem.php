<?php 

$extencoes = array('png', 'jpg', 'bmp');
$quantidadeExtencoes = count($extencoes);

for ($i=0; $i < $quantidadeExtencoes; $i++) { 
	$arquivoAtual = "fotos/"."cobaia3.".$extencoes[$i];
	echo "<br>$arquivoAtual";
}







?>