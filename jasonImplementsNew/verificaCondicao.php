<?php

############################################# REMOVER CONTATO ###############################

include "padrao.php";
                
$coluna   = 'varchar2';
$servidor = "$sevidorPadrao";
$usuario  = "$usuarioPadrao";
$senhaDB  = "$senhaPadrao";
$dbname   = "$bancoPadrao";
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senhaDB, $dbname) or die(mysqli_error($conn));
;
$buscarEm       = "whitelist";
$perquisarPor         = $_SESSION['administrador'];
$result_codigos    = "SELECT * FROM $buscarEm WHERE varchar2 LIKE '$perquisarPor' LIMIT 5 ";
$resultado_codigos = mysqli_query($conn, $result_codigos);
while ($rows_codigos = mysqli_fetch_array($resultado_codigos)) {
    $id = $rows_codigos['id'];
    $sql = "DELETE FROM `jasonBD`.`blacklist` WHERE `blacklist`.`id` = $id";
    mysqli_query($conn, $sql);
                $itensEncontrados++;
}
if ($itensEncontrados > 0) {
                # code...
                //echo "Já existe alguém cadastrado com esse login";
                exit('Esse contato já está bloqueado');
                
} else {
               // echo "não encontrado! $perquisarPor";
}
               


############################################# REMOVER CONTATO ###############################

?>