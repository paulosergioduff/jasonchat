<?php 

require_once "installJason.php";
require_once "socialCore/whiteList.class.php";

if(isset($_GET['logout'])):
		if($_GET['logout'] == 'confirmar'):
			Login::deslogar();
		endif;
	endif; 

	if(isset($_SESSION['logado'])):

include "padrao.php";
$postagem = new JasonWhiteList();

$servidorDeOrigem = "$bancoPadrao";
$servidorDeDestino = 'whitelist';
$contato = $_GET['remove'];

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
                $postagem->remove_contact($servidorDeOrigem, $servidorDeDestino, $contato);
                
} else {
               // echo "não encontrado! $perquisarPor";
}
               


############################################# REMOVER CONTATO ###############################



echo '<script language= "JavaScript">location.href="listaDeContatos.php"</script>';

else:
		echo "Voce nao tem permissao de acesso. <a href=\"home.php\">Clique aqui para voltar</a>";
	endif;

	?>