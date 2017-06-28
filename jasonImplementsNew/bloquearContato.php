<?php 

require_once "installJason.php";
require_once "socialCore/blackList.class.php";

if(isset($_GET['logout'])):
		if($_GET['logout'] == 'confirmar'):
			Login::deslogar();
		endif;
	endif; 

	if(isset($_SESSION['logado'])):

include "padrao.php";





$postagem = new JasonBlackList();

$servidorDeOrigem = "$bancoPadrao";
$servidorDeDestino = 'blacklist';
$contato = $_SESSION['administrador'].$_GET['block'];

verificaCondicaoExistente($contato, 'varchar2', 'blacklist');



$postagem->block_contact($servidorDeOrigem, $servidorDeDestino, $contato);

echo '<script language= "JavaScript">
location.href="listaDeContatos.php"
</script>';

else:
		echo "Voce nao tem permissao de acesso. <a href=\"home.php\">Clique aqui para voltar</a>";
	endif;

	?>