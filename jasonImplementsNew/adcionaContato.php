<?php 

require_once "installJason.php";
require_once "socialCore/whiteList.class.php";

include "padrao.php";




$protocolo = 'https';
$servidorDeOrigem = "$bancoPadrao";
$servidorDeDestino = 'whitelist';
$tipo = 'multitonPDO';
$autor = $_SESSION['administrador'];
$recebeMenssagem =htmlspecialchars($_GET['mensagem']);
$menssagem =  addslashes($recebeMenssagem);
//$mensagem = addslashes($recebeMenssagem);

$natureza = "NOVO DADO 3";;



 
$destinatario = '####';

$postagem = new JasonWhiteList();

verificaCondicaoExistente($menssagem, 'varchar3', 'whitelist');

$postagem->add_contact($protocolo, $servidorDeOrigem, $servidorDeDestino, $destinatario, $tipo, $natureza, $autor, $menssagem);

	
	require_once "class/Usuario.class.php";

	if(isset($_GET['logout'])):
		if($_GET['logout'] == 'confirmar'):
			Login::deslogar();
		endif;
	endif; 

	if(isset($_SESSION['logado'])):
$pegaAutor = $_GET['autor'];
$mensagemCompleta = $pegaAutor."%20foi%20inserido%20em%20seus%20contato";
echo "<script language= 'JavaScript'>
location.href='caixaDeMensagens.php?mensagem=$mensagemCompleta'
</script>";

?>

<?php
	else:
		echo "Voce nao tem permissao de acesso. <a href=\"home.php\">Clique aqui para voltar</a>";
	endif;
?>

	</body>
</html>
