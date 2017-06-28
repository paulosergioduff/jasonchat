<?php 
// Página para uso de testes (playground.php)
// includes necessárias para uso do exemplo
require_once "installJason.php";

require_once "../socialCore/post.class.php";

$crud = crud::getInstance(Conexao::getInstanceMultiton('jasonBD'));
// Para testes, remova os comentários abaixo.
//$crud->update($login, $email, $senha, $valor1, $valor2, '10', $dbTabela);
//$crud->insert($login, $email, $senha, $valor1, $valor2, $tabela, $dbTabela);
//$crud->delete('1', $dbTabela);
// https://maps.googleapis.com/maps/api/geocode/json?address=RUA%20PRINCESA%20ISABEL,%2021%20LOJA%2002,%20rio%20de%20janeiro+CA&key=AIzaSyCC6dCItLsLNgMg8eCl_rTcREN6sDOGiEg






?>