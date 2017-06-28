<?php error_reporting(0);

require_once('installJason.php');

	//session_start();

	//require_once "class/Conexao.class.php";
	require_once "class/Usuario.class.php";

	if(isset($_GET['logout'])):
		if($_GET['logout'] == 'confirmar'):
			Login::deslogar();
		endif;
	endif; 

	if(isset($_SESSION['logado'])):

?>
<html lang="pt-br">

	<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	

		<meta charset="utf-8"/>
		<title>Dashboard</title> 
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/socialNetwork.css">
	</head>
	<body>
<a href="dashboard.php?logout=confirmar" id="botaoSocial">Sair</a>
	<nav></nav>

	
<br />

<div id="caixaEnvioDeMensagem">	
<textarea cols="80"  id="mensagem"></textarea><input type="submit" value="Enviar" id="enviarBotao" onclick="pegaMensagem()">

</div>


<br>


<div id="frameRecebeMensagens">
<iframe src="caixaDeMensagens.php" height="100%" width="100%" frameborder="0" scrolling="no"></iframe>
</div>

	




<?php
	else:
		echo "Voce nao tem permissao de acesso. <a href=\"home.php\">Clique aqui para voltar</a>";
	endif;
?>

<div id="recebeMensagem"></div>

<script type="text/javascript">
	function pegaMensagem()
	{
		var mensagem = window.document.getElementById('mensagem').value;
		//alert(mensagem);
		document.getElementById('recebeMensagem').innerHTML = "<iframe src='enviaMensagem.php?mensagem="+mensagem+"'></iframe>";
		document.getElementById('caixaEnvioDeMensagem').innerHTML = '<textarea cols="80"  id="mensagem"></textarea><input type="submit" value="Enviar" id="enviarBotao" onclick="pegaMensagem()">';
		document.getElementById('frameRecebeMensagens').innerHTML = '<iframe src="caixaDeMensagens.php" height="100%" width="100%" frameborder="0" scrolling="no">';
	}
</script>

	</body>
</html>
