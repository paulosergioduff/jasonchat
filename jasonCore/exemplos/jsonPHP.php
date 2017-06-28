<?php 
/*

Demonstração de leitura de json dos dados.

*/
require_once('../model/token.php');
$arquivo = "http://localhost/jasonCore/exemplos/selectTabela.php"; // Sempre colocar caminho completo para possível saída HTTP. Configurar token.php para evitar acessos indevidos. 
$info    = file_get_contents($arquivo);
$lendo   = json_decode($info);
foreach ($lendo->dados as $campo) {
				echo "<b>id:</b> " . $campo->id;
				echo "<br /><b>categoria:</b> " . $campo->Categoria;
				echo "<br /><b>titulo:</b> " . $campo->titulo;
}
?>

