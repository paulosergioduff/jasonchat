<?php
error_reporting(0);
/*

Use este token para prevenir acesso indevido ao banco de dados, em requisições com retornos em JSON

*/
session_start();
//$_SESSION['padrao'] = 'sessao_iniciada';
$tokenPadrao        = sha1($_SESSION['status']);
$tokenExterno       = sha1('sessao_iniciada');
function tokenReprovado()
{
				exit('Token inválido');
				//echo "<br>Token reprovado";
}
function tokenAprovado()
{
				//echo "<br>Token aprovado";
}
function exibirToken($valor)
{
				//echo "<h1>" . sha1($valor) . "</h1>";
}
exibirToken($tokenExterno);
function comparaToken($tokenRecebido, $tokenReferencia)
{
				if ($tokenRecebido != $tokenReferencia) {
								tokenReprovado();
				} else {
								tokenAprovado();
				}
}
comparaToken($tokenExterno, $tokenPadrao);
?>