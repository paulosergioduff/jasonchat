<?php error_reporting(0);

require_once "installJason.php";
require_once "socialCore/whiteList.class.php";




$protocolo = 'https';
$servidorDeOrigem = 'jasonBD';
$servidorDeDestino = 'whitelist';
$tipo = 'multitonPDO';
$autor = $_SESSION['administrador'];
$recebeMenssagem =htmlspecialchars($_GET['mensagem']);
$menssagem =  addslashes($recebeMenssagem);
//$mensagem = addslashes($recebeMenssagem);

$natureza = "NOVO DADO 3";;



 
$destinatario = 'billgates';

$postagem = new JasonWhiteList();
$postagem->add_contact($protocolo, $servidorDeOrigem, $servidorDeDestino, $destinatario, $tipo, $natureza, $autor, $menssagem);

	
	require_once "class/Usuario.class.php";

	if(isset($_GET['logout'])):
		if($_GET['logout'] == 'confirmar'):
			Login::deslogar();
		endif;
	endif; 

	if(isset($_SESSION['logado'])):
echo '<script language= "JavaScript">
location.href="dashboard.php?mensagem=Contato%20inserido%20com%20sucesso"
</script>';

?>

<?php
	else:
		echo "Voce nao tem permissao de acesso. <a href=\"home.php\">Clique aqui para voltar</a>";
	endif;
?>

	</body>
</html>
