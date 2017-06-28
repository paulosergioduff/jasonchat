<?php
require_once('jasonCore.class.php');
Class JasonBlackList extends BlackList
{
                /*
                ################################# CUIDADO!!!!! ################################################
                
                EMBORA APARENTE QUE SEJA POSSÍVEL USAR UMA FUNÇÃO SÓ PARA PARA OS ENVIOS DE MENSAGEM, TENHA EM
                MENTE QUE ESSA CLASSE NÃO FOI 'PLANEJADA' SOMENTE PARA BANCO DE DADOS MYSQL, MAS ARQUIVO DE DADOS JSON TAMBÉM (AINDA NÃO IMPLEMENTADO EM 13/06/2017)
                ################################# CUIDADO!!!!! ################################################
                
                */
                public function block_contact($serverOrigin, $serverDestiny, $contact){
                    $block_contact = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
                    $autor = $_SESSION['administrador'];
                                                $block_contact->insert($contact, '$menssage', "$autor", '$target', '$nat', 'bloqueado', 'blacklist');
                }
                public function block_page($serverOrigin, $serverDestiny, $contact)
                {
                    echo "em desenvolvimento";
                }
                public function block_list($serverOrigin, $serverDestiny, $contact)
                {
                    echo "em desenvolvimento";

                }

                public function unBlock_target($serverOrigin, $serverDestiny, $target)
                {
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
$perquisarPor         = $target;
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
                echo "Já existe alguém cadastrado com esse login";
                
} else {
                echo 'não encontrado!';
}
                }
    }

 ?>