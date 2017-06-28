<?php

require_once('jasonCore.class.php');



Class JasonWhiteList extends WhiteList
{
				public function add_contact($protocol, $serverOrigin, $serverDestiny, $target, $type, $nat, $autor, $menssage){
					if ($type == 'multitonPDO') {
                                                $add_contact = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
												$add_contact->insert($autor, $menssage, $protocol, $target, $nat, 'whitelist', $serverDestiny);
                                }
				}
				public function subscribe_in_page($serverOrigin, $serverDestiny, $contact){
					echo "Implementado!";
				}
				public function add_list($serverOrigin, $serverDestiny, $list){
					echo "Implementado!";
				}

				public function remove_contact($serverOrigin, $serverDestiny, $contact){
					include "padrao.php";
                
$coluna   = 'varchar2';
$servidor = "$sevidorPadrao";
$usuario  = "$usuarioPadrao";
$senhaDB  = "$senhaPadrao";
$dbname   = "$bancoPadrao";
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senhaDB, $dbname) or die(mysqli_error($conn));
;
$buscarEm       = "$serverDestiny";
$perquisarPor         = "$contact";
$result_codigos    = "SELECT * FROM $buscarEm WHERE varchar3 LIKE '$perquisarPor' LIMIT 5 ";
$resultado_codigos = mysqli_query($conn, $result_codigos);
while ($rows_codigos = mysqli_fetch_array($resultado_codigos)) {
    $id = $rows_codigos['id'];
    $sql = "DELETE FROM `jasonBD`.`whitelist` WHERE `whitelist`.`id` = $id";
    mysqli_query($conn, $sql);
                $itensEncontrados++;
}
if ($itensEncontrados > 0) {
                # code...
                //echo "Já existe alguém cadastrado com esse login";
                
} else {
                //echo 'não encontrado!';
}
                }
				


}

?>