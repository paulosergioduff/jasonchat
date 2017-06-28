<meta charset="utf-8">
<?php
// http://localhost/amigavel.php?sessao=artigos&dia=12&mes=12&ano=2017&id=30

$sessao = $_GET['sessao'];

$dia = $_GET['dia'];

$mes  = $_GET['mes'];
$ano = $_GET['ano'];

$id = $_GET['id'];

echo "Digita via url amigáveis: $dia/$mes/$ano";

?>