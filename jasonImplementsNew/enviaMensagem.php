<?php

require_once "installJason.php";
require_once "socialCore/post.class.php";
include "padrao.php";

$postagem = new JasonPost();


$protocolo = 'https';
$servidorDeOrigem = "$bancoPadrao";
$servidorDeDestino = 'feed';
$tipo = 'multitonPDO';
$autor = $_SESSION['administrador'];
$recebeMenssagem =htmlspecialchars($_GET['mensagem']);
$menssagem =  addslashes($recebeMenssagem);
//$mensagem = addslashes($recebeMenssagem);

$natureza = "NOVO DADO 3";;



 
$destinatario = '02';

$postagem->send_Menssage($protocolo, $servidorDeOrigem, $servidorDeDestino , $destinatario, $tipo, $natureza, $autor, $menssagem);

	
	require_once "class/Usuario.class.php";

	if(isset($_GET['logout'])):
		if($_GET['logout'] == 'confirmar'):
			Login::deslogar();
		endif;
	endif; 

	if(isset($_SESSION['logado'])):

?>

<?php
	else:
		echo "Voce nao tem permissao de acesso. <a href=\"home.php\">Clique aqui para voltar</a>";
	endif;
?>

	</body>
</html>
